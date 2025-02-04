<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\TimeSheetTypeResource\Pages;
use App\Models\TimeSheetType;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class TimeSheetTypeResource extends Resource
{
    protected static ?string $model = TimeSheetType::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('value'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('value')->searchable(),
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
            'index' => Pages\ListTimeSheetTypes::route('/'),
            'create' => Pages\CreateTimeSheetType::route('/create'),
            'edit' => Pages\EditTimeSheetType::route('/{record}/edit'),
        ];
    }
}
