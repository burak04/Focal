<?php

namespace App\Filament\Resources\AchievmentResource\Pages;

use App\Filament\Resources\AchievmentResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAchievments extends ListRecords
{
    protected static string $resource = AchievmentResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
