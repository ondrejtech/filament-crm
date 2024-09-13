<?php

namespace App\Filament\Admin\Resources\JournalTypeResource\Pages;

use App\Filament\Admin\Resources\JournalTypeResource;
use Filament\Resources\Pages\EditRecord;

class EditJournalType extends EditRecord
{
    protected static string $resource = JournalTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
