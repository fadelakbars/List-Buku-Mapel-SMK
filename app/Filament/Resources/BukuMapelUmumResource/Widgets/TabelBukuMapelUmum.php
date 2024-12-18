<?php

namespace App\Filament\Resources\BukuMapelUmumResource\Widgets;

use App\Models\BukuMapelUmum;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class TabelBukuMapelUmum extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                BukuMapelUmum::orderBy('judul', 'desc')->take(5)
            )
            ->columns([
                // ...
                Tables\Columns\TextColumn::make('judul')->label('Judul Buku'),
                // ->sortable()
                // ->searchable(),
                Tables\Columns\TextColumn::make('penerbit')->label('Penerbit'),
                // ->sortable()
                // ->searchable(),
                Tables\Columns\TextColumn::make('kelas')->label('Kelas'),
                // ->sortable()
                // ->searchable(),
                Tables\Columns\TextColumn::make('jumlah')->label('Jumlah'),
                // ->sortable()
                // ->searchable(),
            ]);
    }
}
