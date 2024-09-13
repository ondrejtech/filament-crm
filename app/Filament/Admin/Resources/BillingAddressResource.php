<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\BillingAddressResource\Pages;
use App\Models\BillingAddress;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class BillingAddressResource extends Resource
{
    protected static ?string $model = BillingAddress::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('contact_id')->nullable()->relationship('contact', 'name'),
                Forms\Components\TextInput::make('billing_street'),
                Forms\Components\TextInput::make('billing_town'),
                Forms\Components\TextInput::make('billing_zip'),
                Forms\Components\TextInput::make('billing_state'),
                Forms\Components\TextInput::make('billing_country'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('billing_street')->searchable(),
                Tables\Columns\TextColumn::make('billing_town')->searchable(),
                Tables\Columns\TextColumn::make('billing_zip')->searchable(),
                Tables\Columns\TextColumn::make('billing_state')->searchable(),
                Tables\Columns\TextColumn::make('billing_country')->searchable(),
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
            'index' => Pages\ListBillingAddresses::route('/'),
            'create' => Pages\CreateBillingAddress::route('/create'),
            'edit' => Pages\EditBillingAddress::route('/{record}/edit'),
        ];
    }
}
