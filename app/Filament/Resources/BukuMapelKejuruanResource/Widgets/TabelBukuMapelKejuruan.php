<?php

namespace App\Filament\Resources\BukuMapelKejuruanResource\Widgets;

use App\Models\BukuMapelKejuruan;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class TabelBukuMapelKejuruan extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                BukuMapelKejuruan::orderBy('jurusan', 'asc')->take(5)
            )
            ->columns([
                // ...
                Tables\Columns\TextColumn::make('jurusan')->label('Jurusan'),
                Tables\Columns\TextColumn::make('judul')->label('Judul Buku'),
                Tables\Columns\TextColumn::make('penerbit')->label('Penerbit'),
                Tables\Columns\TextColumn::make('kelas')->label('Kelas'),
                Tables\Columns\TextColumn::make('jumlah')->label('Jumlah'),
            ]);
    }
}
