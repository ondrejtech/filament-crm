<?php

namespace App\Filament\Admin\Resources\TimeSheetTypeResource\Pages;

use App\Filament\Admin\Resources\TimeSheetTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTimeSheetTypes extends ListRecords
{
    protected static string $resource = TimeSheetTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
