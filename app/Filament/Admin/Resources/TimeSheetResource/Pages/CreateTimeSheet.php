<?php

namespace App\Filament\Admin\Resources\TimeSheetResource\Pages;

use App\Filament\Admin\Resources\TimeSheetResource;
use Filament\Resources\Pages\CreateRecord;

class CreateTimeSheet extends CreateRecord
{
    protected static string $resource = TimeSheetResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
