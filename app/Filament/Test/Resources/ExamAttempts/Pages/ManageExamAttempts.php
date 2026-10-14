<?php

namespace App\Filament\Test\Resources\ExamAttempts\Pages;

use App\Filament\Test\Resources\ExamAttempts\ExamAttemptResource;
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
