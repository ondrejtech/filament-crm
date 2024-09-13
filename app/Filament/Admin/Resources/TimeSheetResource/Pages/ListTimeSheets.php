<?php

namespace App\Filament\Admin\Resources\TimeSheetResource\Pages;

use App\Filament\Admin\Resources\TimeSheetResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTimeSheets extends ListRecords
{
    protected static string $resource = TimeSheetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
