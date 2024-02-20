<?php

namespace App\Filament\Resources\RelationResource\Pages;

use App\Filament\Resources\RelationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRelation extends EditRecord
{
    protected static string $resource = RelationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
