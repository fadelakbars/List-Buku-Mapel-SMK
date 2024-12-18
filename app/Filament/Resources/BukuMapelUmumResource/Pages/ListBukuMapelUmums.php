<?php

namespace App\Filament\Resources\BukuMapelUmumResource\Pages;

use App\Filament\Resources\BukuMapelUmumResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBukuMapelUmums extends ListRecords
{
    protected static string $resource = BukuMapelUmumResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}