<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\TimeSheetResource\Pages;
use App\Models\TimeSheet;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class TimeSheetResource extends Resource
{
    protected static ?string $model = TimeSheet::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('subject'),
                Forms\Components\Select::make('time_sheet_type')->nullable()->label('Type')->relationship('time_sheet_type', 'name'),
                Forms\Components\DatePicker::make('date'),
                Forms\Components\TimePicker::make('start_time')->label('Start time'),
                Forms\Components\TimePicker::make('end_time')->label('End time'),
                Forms\Components\Select::make('project_id')->nullable()->label('Parent project')->relationship('project', 'name'),
                Forms\Components\Select::make('deal_id')->nullable()->label('Parent deal')->relationship('deal', 'name'),
                Forms\Components\Select::make('task_id')->nullable()->label('Task')->relationship('task', 'name'),
                Forms\Components\Select::make('user_id')->nullable()->required()->label('Employee')->relationship('user', 'name'),
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
            'index' => Pages\ListTimeSheets::route('/'),
            'create' => Pages\CreateTimeSheet::route('/create'),
            'edit' => Pages\EditTimeSheet::route('/{record}/edit'),
        ];
    }
}
