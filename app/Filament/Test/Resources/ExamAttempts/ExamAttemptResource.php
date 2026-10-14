<?php

namespace App\Filament\Test\Resources\ExamAttempts;

use App\Filament\Test\Resources\ExamAttempts\Pages\ManageExamAttempts;
use App\Filament\Test\Resources\ExamAttempts\Pages\ViewExamAttemptDetail;
use App\Models\ExamAttempt;
use BackedEnum;
use Filament\Actions\Action;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use UnitEnum;

class ExamAttemptResource extends Resource
{
    protected static ?string $model = ExamAttempt::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedClipboardDocumentCheck;

    protected static ?string $navigationLabel = 'Hasil Ujian';
    protected static string |UnitEnum| null $navigationGroup = 'Operasional Ujian';

    protected static ?int $navigationSort = 2;

    protected static ?string $modelLabel = 'Hasil Ujian';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            //
        ]);
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('user_id', auth()->id());
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('subject.name')
                    ->label('Mata Pelajaran')
                    ->placeholder('-'),
                TextColumn::make('status_kelulusan')
                    ->label('Status')
                    ->badge()
                    ->color(fn ($record) => $record->score >= ($record->exam->threshold ?? 0) ? 'success' : 'danger')
                    ->getStateUsing(fn ($record) => $record->score >= ($record->exam->threshold ?? 0) ? 'Lulus' : 'Tidak Lulus'),
                TextColumn::make('exam.title')
                    ->label('Ujian')
                    ->placeholder('-')
                    ->searchable(),
                TextColumn::make('finished_at')
                    ->label('Tanggal Ujian')
                    ->dateTime('d F Y, H:i')
                    ->sortable(),
                TextColumn::make('score')
                    ->label('Skor')
                    ->numeric(2)
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                Action::make('detail')
                    ->label('Lihat Detail')
                    ->url(fn ($record) => ExamAttemptResource::getUrl('detail', ['record' => $record], panel: 'test'))
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