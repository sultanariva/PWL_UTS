<?php

namespace App\Filament\Resources\PenjualanDetails\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PenjualanDetailForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('penjualan_kode')
                    ->relationship('penjualan', 'penjualan_kode')
                    ->required(),
                Select::make('barang_nama')
                    ->relationship('barang', 'barang_nama')
                    ->required(),
                TextInput::make('harga')
                    ->required()
                    ->numeric(),
                TextInput::make('jumlah')
                    ->required()
                    ->numeric(),
            ]);
    }
}
