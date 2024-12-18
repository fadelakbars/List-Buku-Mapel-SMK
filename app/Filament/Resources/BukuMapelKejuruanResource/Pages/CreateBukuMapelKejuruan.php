<?php

namespace App\Filament\Resources\BukuMapelKejuruanResource\Pages;

use App\Filament\Resources\BukuMapelKejuruanResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBukuMapelKejuruan extends CreateRecord
{
    protected static string $resource = BukuMapelKejuruanResource::class;

    protected static ?string $title = 'Tambah Buku'; 

    protected function getRedirectUrl(): string
    {
        return route('filament.admin.resources.buku-mapel-kejuruans.index');
    }

}
