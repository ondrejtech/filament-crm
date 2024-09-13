<?php

namespace App\Filament\Admin\Resources\BillingAddressResource\Pages;

use App\Filament\Admin\Resources\BillingAddressResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBillingAddresses extends ListRecords
{
    protected static string $resource = BillingAddressResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
