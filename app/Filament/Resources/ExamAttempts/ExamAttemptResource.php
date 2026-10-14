<?php

namespace App\Filament\Resources\ExamAttempts;

use App\Filament\Resources\ExamAttempts\Pages\ManageExamAttempts;
use App\Filament\Resources\ExamAttempts\Pages\ViewExamAttemptDetail;
use App\Models\ExamAttempt;
use BackedEnum;
use Filament\Actions\Action;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use UnitEnum;

class ExamAttemptResource extends Resource
{
    protected static ?string $model = ExamAttempt::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedClipboardDocumentCheck;

    protected static ?string $navigationLabel = 'Rekap Ujian';
    protected static string |UnitEnum| null $navigationGroup = 'Operasional Ujian';

    protected static ?string $modelLabel = 'Rekap Ujian';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            //
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('siswa')
                    ->label('Nama Siswa')
                    ->getStateUsing(fn ($record) => $record->user->student?->name ?? $record->user->name),
                TextColumn::make('nis')
                    ->label('NIS')
                    ->getStateUsing(fn ($record) => $record->user->student?->nis ?? '-'),
                TextColumn::make('subject.name')
                    ->label('Mata Pelajaran')
                    ->placeholder('-'),
                TextColumn::make('score')
                    ->label('Skor')
                    ->numeric(2)
                    ->sortable(),
                TextColumn::make('status_kelulusan')
                    ->label('Status')
                    ->badge()
                    ->color(fn ($record) => $record->score >= ($record->exam->threshold ?? 0) ? 'success' : 'danger')
                    ->getStateUsing(fn ($record) => $record->score >= ($record->exam->threshold ?? 0) ? 'Lulus' : 'Tidak Lulus'),
                TextColumn::make('started_at')
                    ->label('Waktu Mulai')
                    ->dateTime('d F Y, H:i')
                    ->sortable(),
                TextColumn::make('finished_at')
                    ->label('Waktu Selesai')
                    ->dateTime('d F Y, H:i')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                Action::make('detail')
                    ->label('Lihat Detail')
                    ->url(fn ($record) => ExamAttemptResource::getUrl('detail', ['record' => $record], panel: 'admin'))
                    ->button(),
            ])
            ->toolbarActions([
                //
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManageExamAttempts::route('/'),
            'detail' => ViewExamAttemptDetail::route('/{record}/detail'),
        ];
    }
}