<?php

namespace App\Filament\Admin\Resources\DealResource\Pages;

use App\Filament\Admin\Resources\DealResource;
use Filament\Resources\Pages\EditRecord;

class EditDeal extends EditRecord
{
    protected static string $resource = DealResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
