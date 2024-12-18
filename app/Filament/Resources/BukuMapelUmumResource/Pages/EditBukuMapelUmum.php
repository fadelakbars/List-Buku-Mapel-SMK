<?php

namespace App\Filament\Resources\BukuMapelUmumResource\Pages;

use App\Filament\Resources\BukuMapelUmumResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBukuMapelUmum extends EditRecord
{
    protected static string $resource = BukuMapelUmumResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
