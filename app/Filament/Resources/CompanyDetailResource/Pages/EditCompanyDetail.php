<?php

namespace App\Filament\Resources\CompanyDetailResource\Pages;

use App\Filament\Resources\CompanyDetailResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCompanyDetail extends EditRecord
{
    protected static string $resource = CompanyDetailResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
