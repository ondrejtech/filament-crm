<?php

namespace App\Filament\Admin\Resources\LeaveTypeResource\Pages;

use App\Filament\Admin\Resources\LeaveTypeResource;
use Filament\Resources\Pages\CreateRecord;

class CreateLeaveType extends CreateRecord
{
    protected static string $resource = LeaveTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
