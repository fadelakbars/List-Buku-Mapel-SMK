<?php

namespace App\Filament\Resources;

use App\Filament\Exports\BukuMapelUmumExporter;
use App\Filament\Resources\BukuMapelUmumResource\Pages;
use App\Filament\Resources\BukuMapelUmumResource\RelationManagers;
use App\Models\BukuMapelUmum;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\ExportAction;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BukuMapelUmumResource extends Resource
{
    protected static ?string $model = BukuMapelUmum::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    
    protected static ?string $navigationLabel = 'Buku Mapel Umum';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('judul')->required(),
                Forms\Components\TextInput::make('penerbit')->required(),
                Forms\Components\Select::make('kelas')
                    ->options([
                        'X' => 'X',
                        'XI' => 'XI',
                        'XII' => 'XII',
                    ])->required(),
                    Forms\Components\TextInput::make('jumlah')->numeric()->required(),
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
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
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make()->label('Hapus Semua'),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBukuMapelUmums::route('/'),
            'create' => Pages\CreateBukuMapelUmum::route('/create'),
            'edit' => Pages\EditBukuMapelUmum::route('/{record}/edit'),
        ];
    }
}
