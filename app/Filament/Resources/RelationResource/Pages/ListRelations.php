<?php

namespace App\Filament\Resources\RelationResource\Pages;

use App\Filament\Resources\RelationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRelations extends ListRecords
{
    protected static string $resource = RelationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
