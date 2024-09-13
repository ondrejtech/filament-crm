<?php

namespace App\Filament\Admin\Resources\BillingAddressResource\Pages;

use App\Filament\Admin\Resources\BillingAddressResource;
use Filament\Resources\Pages\CreateRecord;

class CreateBillingAddress extends CreateRecord
{
    protected static string $resource = BillingAddressResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
