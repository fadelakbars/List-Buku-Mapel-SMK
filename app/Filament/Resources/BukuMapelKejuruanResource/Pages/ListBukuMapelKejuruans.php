<?php

namespace App\Filament\Resources\BukuMapelKejuruanResource\Pages;

use App\Filament\Resources\BukuMapelKejuruanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBukuMapelKejuruans extends ListRecords
{
    protected static string $resource = BukuMapelKejuruanResource::class;

    protected static ?string $title = 'Daftar Buku Mapel Kejuruan'; 

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Tambah Buku'),
            
        ];
    }
}
