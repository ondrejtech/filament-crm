<?php

namespace App\Filament\Admin\Resources\CurencyResource\Pages;

use App\Filament\Admin\Resources\CurencyResource;
use Filament\Resources\Pages\EditRecord;

class EditCurency extends EditRecord
{
    protected static string $resource = CurencyResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
