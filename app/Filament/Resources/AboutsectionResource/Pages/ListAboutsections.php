<?php

namespace App\Filament\Resources\AboutsectionResource\Pages;

use App\Filament\Resources\AboutsectionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAboutsections extends ListRecords
{
    protected static string $resource = AboutsectionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
