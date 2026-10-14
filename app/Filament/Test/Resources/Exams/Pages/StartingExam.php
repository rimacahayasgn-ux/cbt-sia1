<?php

namespace App\Filament\Test\Resources\Exams\Pages;

use App\Filament\Test\Resources\Exams\ExamResource;
use App\Models\Exam;
use App\Models\ExamAttempt;
use App\Models\ExamAttemptAnswer;
use App\Models\Subject;
use Filament\Resources\Pages\Page;
use Illuminate\Support\Facades\Auth;

class StartingExam extends Page
{
    protected static string $resource = ExamResource::class;

    protected string $view = 'filament.test.resources.exams.pages.starting-exam';

    public ?Exam $exam = null;
    public ?Subject $subject = null;
    public array $questions = [];
    public array $answers = [];
    public int $currentIndex = 0;
    public ?int $attemptId = null;
    public int $secondsRemaining = 0;

    public function mount(Exam $exam, Subject $subject)
    {
        $this->exam = $exam;
        $this->subject = $subject;

        $attempt = ExamAttempt::firstOrCreate(
            [
                'exam_id' => $exam->id,
                'subject_id' => $subject->id,
                'user_id' => Auth::id(),
            ],
            ['started_at' => now(), 'status' => 'in_progress']
        );

        if ($attempt->status === 'finished') {
            $this->redirect(ExamResource::getUrl('pilih-mapel', ['exam' => $exam], panel: 'test'));
            return;
        }

        $this->attemptId = $attempt->id;

        $endsAt = $attempt->started_at->copy()->addMinutes($exam->duration);
        $this->secondsRemaining = now()->greaterThanOrEqualTo($endsAt) ? 0 : now()->diffInSeconds($endsAt);

        $existingAnswers = ExamAttemptAnswer::where('exam_attempt_id', $attempt->id)->get();

        if ($existingAnswers->isNotEmpty()) {
            $questions = $subject->questions()
                ->whereIn('id', $existingAnswers->pluck('question_id'))
                ->with(['answers' => fn ($q) => $q->inRandomOrder()])
                ->get();

            foreach ($existingAnswers as $jawaban) {
                if ($jawaban->answer_id) {
                    $this->answers[$jawaban->question_id] = $jawaban->answer_id;
                }
            }
        } else {
            $qty = $exam->subjects()->where('subjects.id', $subject->id)->first()?->pivot->qty ?? 10;

            $questions = $subject->questions()
                ->where('is_active', true)
                ->with(['answers' => fn ($q) => $q->inRandomOrder()])
                ->inRandomOrder()
                ->limit($qty)
                ->get();

            foreach ($questions as $q) {
                ExamAttemptAnswer::create([
                    'exam_attempt_id' => $attempt->id,
                    'question_id' => $q->id,
                ]);
            }
        }

        $this->questions = $questions->values()->toArray();
    }

    public function selectAnswer($questionId, $answerId)
    {
        $this->answers[$questionId] = $answerId;

        ExamAttemptAnswer::where('exam_attempt_id', $this->attemptId)
            ->where('question_id', $questionId)
            ->update(['answer_id' => $answerId]);
    }

    public function next()
    {
        if ($this->currentIndex < count($this->questions) - 1) {
            $this->currentIndex++;
        }
    }

    public function previous()
    {
        if ($this->currentIndex > 0) {
            $this->currentIndex--;
        }
    }

    public function goTo($index)
    {
        $this->currentIndex = $index;
    }

    public function finish()
    {
        $attempt = ExamAttempt::findOrFail($this->attemptId);

        $totalScore = 0;
        $achievedScore = 0;

        foreach ($this->questions as $soal) {
            $questionScore = $soal['score'] ?? 1;
            $totalScore += $questionScore;

            $chosenAnswerId = $this->answers[$soal['id']] ?? null;
            $chosenAnswer = collect($soal['answers'])->firstWhere('id', $chosenAnswerId);
            $isCorrect = $chosenAnswer && $chosenAnswer['letter'] === $soal['correct_answer'];

            if ($isCorrect) {
                $achievedScore += $questionScore;
            }

            ExamAttemptAnswer::where('exam_attempt_id', $attempt->id)
                ->where('question_id', $soal['id'])
                ->update(['answer_id' => $chosenAnswerId, 'is_correct' => $isCorrect]);
        }

        $finalScore = $totalScore > 0 ? round(($achievedScore / $totalScore) * 100, 2) : 0;

        $attempt->update([
            'finished_at' => now(),
            'score' => $finalScore,
            'status' => 'finished',
        ]);

        $this->redirect(ExamResource::getUrl('selesai', ['exam' => $this->exam, 'attempt' => $attempt->id], panel: 'test'));
    }
}