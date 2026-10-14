<?php

namespace App\Filament\Resources\Students\Schemas;

use App\Models\Student;
use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class StudentInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                 Section::make()
                    ->columns()
                    ->columnSpanFull()
                    ->schema([
                        TextEntry::make('reg_year')
                            ->label('Tahun masuk'),
                            //->numeric(),
                        TextEntry::make('nis')
                            ->label('Nomor Induk Siswa')
                            ->columnSpanFull(),
                        TextEntry::make('name')
                            ->label('Nama Lengkap')
                            ->columnSpanFull(),
                        TextEntry::make('gender')
                            ->label('Jenis Kelamin')
                            ->formatStateUsing(
                                fn (bool $state) => $state
                                    ? 'Laki-laki'
                                    : 'Perempuan'
                            ),
                        TextEntry::make('status')
                            ->badge(),
                            //->numeric(),
                        TextEntry::make('deleted_at')
                            ->dateTime()
                            ->visible(fn (Student $record): bool => $record->trashed()),
                        TextEntry::make('created_at')
                            ->dateTime()
                            ->placeholder('-'),
                        TextEntry::make('updated_at')
                            ->dateTime()
                            ->placeholder('-'),
                    ])
            ]);
    }
}
