<?php

namespace App\Filament\Test\Resources\Exams\Pages;

use App\Filament\Test\Resources\Exams\ExamResource;
use App\Models\Exam;
use App\Models\ExamAttempt;
use Filament\Resources\Pages\Page;

class ExamFinished extends Page
{
    protected static string $resource = ExamResource::class;

    protected string $view = 'filament.test.resources.exams.pages.exam-finished';

    public ?ExamAttempt $attempt = null;

    public function mount(Exam $exam, ExamAttempt $attempt)
    {
        $this->attempt = $attempt->load('subject');
    }
}
