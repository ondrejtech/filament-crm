<?php

namespace App\Filament\Admin\Resources\MarketingResource\Pages;

use App\Filament\Admin\Resources\MarketingResource;
use Filament\Resources\Pages\EditRecord;

class EditMarketing extends EditRecord
{
    protected static string $resource = MarketingResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
