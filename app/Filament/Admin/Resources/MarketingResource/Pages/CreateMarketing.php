<?php

namespace App\Filament\Admin\Resources\MarketingResource\Pages;

use App\Filament\Admin\Resources\MarketingResource;
use Filament\Resources\Pages\CreateRecord;

class CreateMarketing extends CreateRecord
{
    protected static string $resource = MarketingResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
