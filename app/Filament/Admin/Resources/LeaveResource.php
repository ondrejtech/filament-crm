<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\LeaveResource\Pages;
use App\Models\Leave;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class LeaveResource extends Resource
{
    protected static ?string $model = Leave::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')->nullable()->required()->label('Employee')->relationship('user', 'name'),
                Forms\Components\Select::make('leave_type_id')->nullable()->label('Type')->relationship('leave_type', 'name'),
                Forms\Components\DatePicker::make('start_date')->required()->label('Start date'),
                Forms\Components\DatePicker::make('end_date')->required()->label('End date'),
                Forms\Components\TimePicker::make('start_time')->required()->label('Start time'),
                Forms\Components\TimePicker::make('end_time')->required()->label('End time'),
                Forms\Components\TextInput::make('description'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('description')->searchable(),
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
            'index' => Pages\ListLeaves::route('/'),
            'create' => Pages\CreateLeave::route('/create'),
            'edit' => Pages\EditLeave::route('/{record}/edit'),
        ];
    }
}
