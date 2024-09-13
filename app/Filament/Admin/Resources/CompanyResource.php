<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\CompanyResource\Pages;
use App\Models\Company;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CompanyResource extends Resource
{
    protected static ?string $model = Company::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('company_name')->label('Company name'),
                Forms\Components\Select::make('contact_name')->nullable()->required()->label('Contact person')->relationship('contactName', 'name'),
                Forms\Components\TextInput::make('phone')->label('Phone'),
                Forms\Components\TextInput::make('email')->required()->label('Email'),
                Forms\Components\TextInput::make('website'),
                Forms\Components\TextInput::make('ico')->required()->label('EIN / ID'),
                Forms\Components\TextInput::make('vat')->label('VAT'),
                Forms\Components\TextInput::make('street'),
                Forms\Components\TextInput::make('town'),
                Forms\Components\TextInput::make('zip')->label('ZIP / Postal code'),
                Forms\Components\TextInput::make('state')->label('State / Province'),
                Forms\Components\TextInput::make('country'),
                Forms\Components\TextInput::make('billing_street'),
                Forms\Components\TextInput::make('billing_town'),
                Forms\Components\TextInput::make('billing_zip')->label('ZIP / Postal code'),
                Forms\Components\TextInput::make('billing_state')->label('State / Province'),
                Forms\Components\TextInput::make('billing_country')->label('Billing country'),
                Forms\Components\Textarea::make('note'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('company_name')->searchable(),
                Tables\Columns\TextColumn::make('phone')->searchable(),
                Tables\Columns\TextColumn::make('email')->searchable(),
                Tables\Columns\TextColumn::make('website')->searchable(),
                Tables\Columns\TextColumn::make('ico')->searchable(),
                Tables\Columns\TextColumn::make('vat')->searchable(),
                Tables\Columns\TextColumn::make('street')->searchable(),
                Tables\Columns\TextColumn::make('town')->searchable(),
                Tables\Columns\TextColumn::make('zip')->searchable(),
                Tables\Columns\TextColumn::make('state')->searchable(),
                Tables\Columns\TextColumn::make('country')->searchable(),
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
            'index' => Pages\ListCompanies::route('/'),
            'create' => Pages\CreateCompany::route('/create'),
            'edit' => Pages\EditCompany::route('/{record}/edit'),
        ];
    }
}
