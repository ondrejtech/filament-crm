<?php

namespace App\Filament\Admin\Resources\ContactResource\Pages;

use App\Filament\Admin\Resources\ContactResource;
use Filament\Resources\Pages\CreateRecord;

class CreateContact extends CreateRecord
{
    protected static string $resource = ContactResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
