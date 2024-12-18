<?php

namespace App\Filament\Exports;

use App\Models\BukuMapelKejuruan;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;

class BukuMapelKejuruanExporter extends Exporter
{
    protected static ?string $model = BukuMapelKejuruan::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('jurusan'),
            ExportColumn::make('judul'),
            ExportColumn::make('penerbit'),
            ExportColumn::make('kelas'),
            ExportColumn::make('jumlah'),
            
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Your buku mapel kejuruan export has completed and ' . number_format($export->successful_rows) . ' ' . str('row')->plural($export->successful_rows) . ' exported.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to export.';
        }

        return $body;
    }
}
