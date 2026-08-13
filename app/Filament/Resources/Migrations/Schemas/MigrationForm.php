<?php

namespace App\Filament\Resources\Migrations\Schemas;

use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class MigrationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('migration')
                ->required()
                ->maxLength(255),
            TextInput::make('batch')
                ->required()
                ->numeric(),
            ]);
    }
}
