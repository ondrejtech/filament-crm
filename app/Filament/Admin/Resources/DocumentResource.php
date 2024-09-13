<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\DocumentResource\Pages;
use App\Models\Document;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class DocumentResource extends Resource
{
    protected static ?string $model = Document::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name'),
                Forms\Components\Select::make('document_type_id')->nullable()->label('Type')->relationship('document_type', 'name'),
                Forms\Components\Select::make('deal_id')->nullable()->label('Parent deal')->relationship('deal', 'name'),
                Forms\Components\Select::make('project_id')->nullable()->label('Parent project')->relationship('project', 'name'),
                Forms\Components\Select::make('company_id')->nullable()->label('Customer')->relationship('company', 'name'),
                Forms\Components\Select::make('contact_id')->nullable()->label('Contact person')->relationship('contact', 'name'),
                Forms\Components\TextInput::make('document_file')->label('Document'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\TextColumn::make('document_file')->searchable(),
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
            'index' => Pages\ListDocuments::route('/'),
            'create' => Pages\CreateDocument::route('/create'),
            'edit' => Pages\EditDocument::route('/{record}/edit'),
        ];
    }
}
