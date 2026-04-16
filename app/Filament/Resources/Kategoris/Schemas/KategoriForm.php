<?php

namespace App\Filament\Resources\Kategoris\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class KategoriForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('kategori_kode')
                    ->required()
                    ->unique(table: 'm_kategori', column: 'kategori_kode', ignoreRecord: true)
                    ->maxLength(10),
                TextInput::make('kategori_nama')
                    ->required()
                    ->maxLength(100),
            ]);
    }
}
