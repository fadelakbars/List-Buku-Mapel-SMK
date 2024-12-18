<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BukuMapelUmumResource\Pages;
use App\Filament\Resources\BukuMapelUmumResource\RelationManagers;
use App\Models\BukuMapelUmum;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BukuMapelUmumResource extends Resource
{
    protected static ?string $model = BukuMapelUmum::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
