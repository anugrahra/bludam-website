<?php

namespace App\Filament\Resources\PesanResource\Pages;

use App\Filament\Resources\PesanResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPesan extends EditRecord
{
    protected static string $resource = PesanResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
