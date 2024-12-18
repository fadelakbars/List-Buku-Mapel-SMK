<?php

namespace App\Filament\Resources\BukuMapelUmumResource\Pages;

use App\Filament\Resources\BukuMapelUmumResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBukuMapelUmum extends CreateRecord
{
    protected static string $resource = BukuMapelUmumResource::class;

    protected static ?string $title = 'Tambah Buku'; 

    protected function getRedirectUrl(): string
    {
        return route('filament.admin.resources.buku-mapel-umums.index');
    }

}
