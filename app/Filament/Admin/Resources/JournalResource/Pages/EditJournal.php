<?php

namespace App\Filament\Admin\Resources\JournalResource\Pages;

use App\Filament\Admin\Resources\JournalResource;
use Filament\Resources\Pages\EditRecord;

class EditJournal extends EditRecord
{
    protected static string $resource = JournalResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
