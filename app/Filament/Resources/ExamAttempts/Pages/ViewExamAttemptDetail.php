<?php

namespace App\Filament\Resources\ExamAttempts\Pages;

use App\Filament\Resources\ExamAttempts\ExamAttemptResource;
use App\Models\ExamAttempt;
use Filament\Resources\Pages\Page;

class ViewExamAttemptDetail extends Page
{
    protected static string $resource = ExamAttemptResource::class;

    protected string $view = 'filament.resources.exam-attempts.pages.view-exam-attempt-detail';

    public ?ExamAttempt $attempt = null;
    public array $details = [];
    public int $totalQuestions = 0;
    public int $totalCorrect = 0;
    public int $totalWrong = 0;
    public bool $isPassed = false;

    public function mount(ExamAttempt $record)
    {
        $this->attempt = $record->load(['user.student', 'exam', 'subject', 'answers.question', 'answers.answer']);

        if (!$this->attempt->subject && $this->attempt->answers->isNotEmpty()) {
            $firstQuestion = $this->attempt->answers->first()?->question;
            if ($firstQuestion?->subject_id) {
                $this->attempt->update(['subject_id' => $firstQuestion->subject_id]);
                $this->attempt->load('subject');
            }
        }

        foreach ($this->attempt->answers as $jawaban) {
            $question = $jawaban->question;
            $correctAnswer = $question ? $question->answers()->where('letter', $question->correct_answer)->first() : null;

            $this->details[] = [
                'question' => $question?->payload ?? '(Pertanyaan tidak ditemukan)',
                'chosen_text' => $jawaban->answer?->text ?? '(Tidak dijawab)',
                'is_correct' => $jawaban->is_correct,
                'correct_text' => $correctAnswer?->text,
            ];
        }

        $this->totalQuestions = $this->attempt->answers->count();
        $this->totalCorrect = $this->attempt->answers->where('is_correct', true)->count();
        $this->totalWrong = $this->totalQuestions - $this->totalCorrect;
        $this->isPassed = $this->attempt->score >= ($this->attempt->exam->threshold ?? 0);
    }
}