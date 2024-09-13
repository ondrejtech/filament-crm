<?php

namespace App\Filament\Admin\Resources\CurencyResource\Pages;

use App\Filament\Admin\Resources\CurencyResource;
use Filament\Resources\Pages\CreateRecord;

class CreateCurency extends CreateRecord
{
    protected static string $resource = CurencyResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
