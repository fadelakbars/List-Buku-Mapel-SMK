<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BukuMapelKejuruanResource\Pages;
use App\Filament\Resources\BukuMapelKejuruanResource\RelationManagers;
use App\Models\BukuMapelKejuruan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BukuMapelKejuruanResource extends Resource
{
    protected static ?string $model = BukuMapelKejuruan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Buku Mapel Kejuruan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('judul')->required(),
                Forms\Components\TextInput::make('penerbit')->required(),
                Forms\Components\Select::make('jurusan')
                    ->options([
                        'TITL' => 'TITL',
                        'TAV' => 'TAV',
                        'TG' => 'TG',
                        'Teknik Jaringan Komputer dan Telekomunikasi' => 'TJKT',
                        'DPIB' => 'DPIB',
                        'ATPH' => 'ATPH',
                    ])->required(),
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
                Tables\Columns\TextColumn::make('judul')->label('Judul')
                ->sortable()
                ->searchable(),
                Tables\Columns\TextColumn::make('penerbit')->label('Penerbit')
                ->sortable()
                ->searchable(),
                Tables\Columns\TextColumn::make('jurusan')->label('Jurusan')
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
            'index' => Pages\ListBukuMapelKejuruans::route('/'),
            'create' => Pages\CreateBukuMapelKejuruan::route('/create'),
            'edit' => Pages\EditBukuMapelKejuruan::route('/{record}/edit'),
        ];
    }
}
