<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\DeliveryAddressResource\Pages;
use App\Models\DeliveryAddress;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class DeliveryAddressResource extends Resource
{
    protected static ?string $model = DeliveryAddress::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('contact_id')->nullable()->relationship('contact', 'name'),
                Forms\Components\TextInput::make('delivery_address'),
                Forms\Components\TextInput::make('delivery_town'),
                Forms\Components\TextInput::make('delivery_zip'),
                Forms\Components\TextInput::make('delivery_state'),
                Forms\Components\TextInput::make('delivery_country'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('delivery_address')->searchable(),
                Tables\Columns\TextColumn::make('delivery_town')->searchable(),
                Tables\Columns\TextColumn::make('delivery_zip')->searchable(),
                Tables\Columns\TextColumn::make('delivery_state')->searchable(),
                Tables\Columns\TextColumn::make('delivery_country')->searchable(),
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
            'index' => Pages\ListDeliveryAddresses::route('/'),
            'create' => Pages\CreateDeliveryAddress::route('/create'),
            'edit' => Pages\EditDeliveryAddress::route('/{record}/edit'),
        ];
    }
}
