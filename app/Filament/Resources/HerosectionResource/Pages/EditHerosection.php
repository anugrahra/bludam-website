<?php

namespace App\Filament\Resources\HerosectionResource\Pages;

use App\Filament\Resources\HerosectionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHerosection extends EditRecord
{
    protected static string $resource = HerosectionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
