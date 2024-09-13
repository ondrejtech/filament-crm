<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\DealResource\Pages;
use App\Models\Deal;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class DealResource extends Resource
{
    protected static ?string $model = Deal::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name'),
                Forms\Components\Select::make('company_id')->nullable()->label('Customer')->relationship('company', 'name'),
                Forms\Components\Select::make('contact_id')->nullable()->label('Contact person')->relationship('contact', 'name'),
                Forms\Components\TextInput::make('email')->required()->label('Email'),
                Forms\Components\TextInput::make('phone'),
                Forms\Components\TextInput::make('street'),
                Forms\Components\TextInput::make('town'),
                Forms\Components\TextInput::make('zip')->label('ZIP / Postal code'),
                Forms\Components\TextInput::make('state')->label('State / Province'),
                Forms\Components\TextInput::make('country')->label('Country'),
                Forms\Components\TextInput::make('est_revenue')->label('Est. Revenue'),
                Forms\Components\Select::make('currency_name')->nullable()->label('Currency')->options([]),
                Forms\Components\DatePicker::make('est_close_date'),
                Forms\Components\TextInput::make('probability')->numeric(),
                Forms\Components\TextInput::make('referral_source')->label('Referral Source'),
                Forms\Components\Select::make('marketing_id')->nullable()->label('Marketing')->relationship('marketing', 'name'),
                Forms\Components\Textarea::make('note'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\TextColumn::make('email')->searchable(),
                Tables\Columns\TextColumn::make('phone')->searchable(),
                Tables\Columns\TextColumn::make('street')->searchable(),
                Tables\Columns\TextColumn::make('town')->searchable(),
                Tables\Columns\TextColumn::make('zip')->searchable(),
                Tables\Columns\TextColumn::make('state')->searchable(),
                Tables\Columns\TextColumn::make('country')->searchable(),
                Tables\Columns\TextColumn::make('est_revenue')->searchable(),
                Tables\Columns\TextColumn::make('referral_source')->searchable(),

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
            'index' => Pages\ListDeals::route('/'),
            'create' => Pages\CreateDeal::route('/create'),
            'edit' => Pages\EditDeal::route('/{record}/edit'),
        ];
    }
}
