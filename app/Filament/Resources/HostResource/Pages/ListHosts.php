<?php

namespace App\Filament\Resources\HostResource\Pages;

use App\Filament\Resources\HostResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHosts extends ListRecords
{
    protected static string $resource = HostResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
