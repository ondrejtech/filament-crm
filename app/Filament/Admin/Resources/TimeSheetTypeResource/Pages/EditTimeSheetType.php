<?php

namespace App\Filament\Admin\Resources\TimeSheetTypeResource\Pages;

use App\Filament\Admin\Resources\TimeSheetTypeResource;
use Filament\Resources\Pages\EditRecord;

class EditTimeSheetType extends EditRecord
{
    protected static string $resource = TimeSheetTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
