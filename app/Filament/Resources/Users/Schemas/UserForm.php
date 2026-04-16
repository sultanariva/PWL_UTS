<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('level_id')
                    ->relationship('level', 'level_nama')
                    ->required(),
                TextInput::make('username')
                    ->required()
                    ->unique(table: 'm_user', column: 'username', ignoreRecord: true)
                    ->maxLength(20),
                TextInput::make('nama')
                    ->required()
                    ->maxLength(100),
                TextInput::make('password')
                    ->nullable()
                    ->minLength(8)
                    ->dehydrateStateUsing(fn ($state) => filled($state) ? bcrypt($state) : null),
            ]);
    }
}
