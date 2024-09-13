<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\JournalTypeResource\Pages;
use App\Models\JournalType;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class JournalTypeResource extends Resource
{
    protected static ?string $model = JournalType::class;

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
            'index' => Pages\ListJournalTypes::route('/'),
            'create' => Pages\CreateJournalType::route('/create'),
            'edit' => Pages\EditJournalType::route('/{record}/edit'),
        ];
    }
}
