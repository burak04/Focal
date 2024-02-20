<?php

namespace App\Filament\Resources\CompanyDetailResource\Pages;

use App\Filament\Resources\CompanyDetailResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCompanyDetails extends ListRecords
{
    protected static string $resource = CompanyDetailResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
