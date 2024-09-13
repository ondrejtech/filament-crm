<?php

namespace App\Filament\Admin\Resources\TimeSheetTypeResource\Pages;

use App\Filament\Admin\Resources\TimeSheetTypeResource;
use Filament\Resources\Pages\CreateRecord;

class CreateTimeSheetType extends CreateRecord
{
    protected static string $resource = TimeSheetTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
