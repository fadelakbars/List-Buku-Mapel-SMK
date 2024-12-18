<?php

namespace App\Filament\Resources\BukuMapelKejuruanResource\Pages;

use App\Filament\Resources\BukuMapelKejuruanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBukuMapelKejuruan extends EditRecord
{
    protected static string $resource = BukuMapelKejuruanResource::class;

    protected static ?string $title = 'Edit Buku'; 

    protected function getRedirectUrl(): string
    {
        return route('filament.admin.resources.buku-mapel-kejuruans.index');
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
