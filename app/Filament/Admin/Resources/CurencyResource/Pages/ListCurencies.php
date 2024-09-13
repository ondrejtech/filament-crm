<?php

namespace App\Filament\Admin\Resources\CurencyResource\Pages;

use App\Filament\Admin\Resources\CurencyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCurencies extends ListRecords
{
    protected static string $resource = CurencyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
