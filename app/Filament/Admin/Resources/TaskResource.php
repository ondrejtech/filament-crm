<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\TaskResource\Pages;
use App\Models\Task;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class TaskResource extends Resource
{
    protected static ?string $model = Task::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('subject'),
                Forms\Components\Select::make('user_id')->nullable()->label('Solver')->relationship('solver', 'name'),
                Forms\Components\Select::make('dell_id')->nullable()->label('Parent Dell')->relationship('dell', 'name'),
                Forms\Components\Select::make('project_id')->nullable()->label('Parent project')->relationship('project', 'name'),
                Forms\Components\DatePicker::make('start')->label('Start date'),
                Forms\Components\DatePicker::make('due')->label('Due date'),
                Forms\Components\Select::make('company_id')->nullable()->label('Customer')->relationship('company', 'name'),
                Forms\Components\Select::make('contact_id')->nullable()->label('Contact')->relationship('contact', 'name'),
                Forms\Components\DatePicker::make('reminder_date'),
                Forms\Components\TimePicker::make('reminder_time')->label('Reminder_time'),
                Forms\Components\Textarea::make('note'),
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
            'index' => Pages\ListTasks::route('/'),
            'create' => Pages\CreateTask::route('/create'),
            'edit' => Pages\EditTask::route('/{record}/edit'),
        ];
    }
}
