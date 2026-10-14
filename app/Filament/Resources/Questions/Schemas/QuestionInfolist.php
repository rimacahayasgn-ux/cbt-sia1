<?php

namespace App\Filament\Resources\Questions\Schemas;

use App\Models\Question;
use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\RepeatableEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class QuestionInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('subject.name')
                    ->label('Subject'),
                TextEntry::make('payload')
                    ->label('Pertanyaan')
                    ->html()
                    ->columnSpanFull(),
                //Pilihan jawaban
                RepeatableEntry::make('answers')
                    ->label('Pilihan Jawaban')
                    ->columnSpanFull()
                    ->columns(3)
                    ->schema([
                        TextEntry::make('letter')
                            ->label('Pilihan')
                            ->badge(),
                        TextEntry::make('text')
                            ->label('Deskripsi pilihan'),
                        IconEntry::make('is_correct')
                            ->label('Jawaban benar')
                    ]),
                TextEntry::make('correct_answer')
                    ->badge(),
                TextEntry::make('score')
                    ->formatStateUsing(function ($state){
                        return $state . ' poin';
                    }),
                    //->numeric(),
                TextEntry::make('description')
                    ->placeholder('-')
                    ->columnSpanFull(),
                IconEntry::make('is_active')
                    ->boolean(),
                TextEntry::make('deleted_at')
                    ->dateTime()
                    ->visible(fn (Question $record): bool => $record->trashed()),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
