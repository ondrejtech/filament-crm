<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\JournalResource\Pages;
use App\Models\Journal;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class JournalResource extends Resource
{
    protected static ?string $model = Journal::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('subject'),
                Forms\Components\Select::make('journal_type_id')->nullable()->label('Type')->relationship('journal_type', 'name'),
                Forms\Components\Select::make('deal_id')->nullable()->label('Parent deal')->relationship('deal', 'name'),
                Forms\Components\Select::make('project_id')->nullable()->label('Parent project')->options([]),
                Forms\Components\DatePicker::make('start_date')->label('Start date'),
                Forms\Components\TimePicker::make('start_time')->label('Start time'),
                Forms\Components\Select::make('company_id')->nullable()->label('Customer')->relationship('company', 'name'),
                Forms\Components\Select::make('contact_id')->nullable()->label('Contact person')->relationship('contact', 'name'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('subject')->searchable(),

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
            'index' => Pages\ListJournals::route('/'),
            'create' => Pages\CreateJournal::route('/create'),
            'edit' => Pages\EditJournal::route('/{record}/edit'),
        ];
    }
}