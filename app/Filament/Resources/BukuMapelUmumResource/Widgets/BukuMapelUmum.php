<?php

namespace App\Filament\Resources\BukuMapelUmumResource\Widgets;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class BukuMapelUmum extends BaseWidget
{
    public function table(Table $table): Table
    {
        return $table
            ->query(
                BukuMapelUmum::query()
            )
            ->columns([
                
                Tables\Columns\TextColumn::make('judul')->label('Judul Buku')
                ->sortable()
                ->searchable(),
                Tables\Columns\TextColumn::make('penerbit')->label('Penerbit')
                ->sortable()
                ->searchable(),
                Tables\Columns\TextColumn::make('kelas')->label('Kelas')
                ->sortable()
                ->searchable(),
                Tables\Columns\TextColumn::make('jumlah')->label('Jumlah')
                ->sortable()
                ->searchable(),
            ]);
    }
}
