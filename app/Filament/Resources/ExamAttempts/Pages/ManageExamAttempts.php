<?php

namespace App\Filament\Resources\ExamAttempts\Pages;

use App\Filament\Resources\ExamAttempts\ExamAttemptResource;
use Filament\Resources\Pages\ManageRecords;

class ManageExamAttempts extends ManageRecords
{
    protected static string $resource = ExamAttemptResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //
        ];
    }
}