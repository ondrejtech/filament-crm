<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\CurencyResource\Pages;
use App\Models\Curency;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CurencyResource extends Resource
{
    protected static ?string $model = Curency::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('curency_name'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('curency_name')->searchable(),
            ])
            ->filters([

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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCurencies::route('/'),
            'create' => Pages\CreateCurency::route('/create'),
            'edit' => Pages\EditCurency::route('/{record}/edit'),
        ];
    }
}
