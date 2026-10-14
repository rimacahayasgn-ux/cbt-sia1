<?php

namespace App\Filament\Test\Resources\Exams;

use App\Filament\Test\Resources\Exams\Pages\ExamFinished;
use App\Filament\Test\Resources\Exams\Pages\ManageExams;
use App\Filament\Test\Resources\Exams\Pages\PilihMapel;
use App\Filament\Test\Resources\Exams\Pages\StartingExam;
use App\Models\Exam;
use BackedEnum;
use Filament\Actions\Action;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use UnitEnum;

class ExamResource extends Resource
{
    protected static ?string $model = Exam::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedPencilSquare;

    protected static ?string $recordTitleAttribute = 'title';

    protected static ?string $navigationLabel = 'Sesi Ujian';
    protected static string |UnitEnum| null $navigationGroup = 'Operasional Ujian';

    protected static ?string $modelLabel = 'Ujian';

    public static function table(Table $table): Table
    {
        return $table
            ->modifyQueryUsing(function (Builder $query) {
    $now = now();
    $query
        ->where('is_avaiable', true)
        ->where(function (Builder $query) use ($now) {
            $query
                ->where(fn (Builder $query) => $query
                    ->where('exact_time', true)
                    ->where('started_at', '<=', $now)
                    ->whereRaw(
                        'DATE_ADD(started_at, INTERVAL duration MINUTE) >= ?',
                        [$now]
                    ))
                ->orWhere(fn (Builder $query) => $query
                    ->where('exact_time', false)
                    ->where('started_at', '<=', $now)
                    ->whereNotNull('expired_at')
                    ->where('expired_at', '>=', $now));
        });
})
        
            ->recordTitleAttribute('title')
            ->columns([
                TextColumn::make('title')
                    ->label('Ujian')
                    ->searchable(),
                TextColumn::make('duration')
                    ->label('Durasi')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('threshold')
                    ->label('Min. Score')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('started_at')
                    ->label('Mulai')
                    ->dateTime('d F Y, H:i:s')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                Action::make('start')
                    ->label('Mulai Ujian')
                    ->icon(Heroicon::OutlinedPaperAirplane)
                    ->color('primary')
                    ->button()
                    ->disabled(fn ($record) => 
                        $record->started_at >= now()
                    )
                    ->url(fn ($record) => ExamResource::getUrl('pilih-mapel', ['exam' => $record], panel: 'test')),
        ]);
    }

    public static function getPages(): array
{
    return [
        'index' => ManageExams::route('/'),
        'pilih-mapel' => PilihMapel::route('/{exam}/pilih-mapel'),
        'mulai' => StartingExam::route('/{exam}/mulai/{subject}'),
        'selesai' => ExamFinished::route('/{exam}/selesai/{attempt}'),
    ];
}
}