<?php

namespace App\Filament\Admin\Resources\JournalTypeResource\Pages;

use App\Filament\Admin\Resources\JournalTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJournalTypes extends ListRecords
{
    protected static string $resource = JournalTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
