<?php

namespace App\Filament\Resources\PesanResource\Pages;

use App\Filament\Resources\PesanResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPesans extends ListRecords
{
    protected static string $resource = PesanResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
