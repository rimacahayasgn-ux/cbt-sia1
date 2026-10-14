<?php

namespace App\Filament\Test\Resources\Exams\Pages;

use App\Filament\Test\Resources\Exams\ExamResource;
use App\Models\Exam;
use App\Models\ExamAttempt;
use Filament\Resources\Pages\Page;
use Illuminate\Support\Facades\Auth;

class PilihMapel extends Page
{
    protected static string $resource = ExamResource::class;

    protected string $view = 'filament.test.resources.exams.pages.pilih-mapel';

    public ?Exam $exam = null;
    public array $subjects = [];

    public function mount(Exam $exam)
    {
        $this->exam = $exam;

        foreach ($exam->subjects as $mapel) {
            $attempt = ExamAttempt::where('exam_id', $exam->id)
                ->where('subject_id', $mapel->id)
                ->where('user_id', Auth::id())
                ->latest()
                ->first();

            $this->subjects[] = [
                'id' => $mapel->id,
                'name' => $mapel->name,
                'status' => $attempt?->status,
                'score' => $attempt?->score,
                'attempt_id' => $attempt?->id,
            ];
        }
    }
}