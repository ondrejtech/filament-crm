<?php

namespace App\Filament\Admin\Resources\DeliveryAddressResource\Pages;

use App\Filament\Admin\Resources\DeliveryAddressResource;
use Filament\Resources\Pages\EditRecord;

class EditDeliveryAddress extends EditRecord
{
    protected static string $resource = DeliveryAddressResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
