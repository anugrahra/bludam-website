<?php

namespace App\Filament\Resources\HerosectionResource\Pages;

use App\Filament\Resources\HerosectionResource;
use App\Models\herosection;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditHerosection extends EditRecord
{
    protected static string $resource = HerosectionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(
                function(herosection $record){
                    if($record->background) {
                        Storage::disk('public')->delete($record->background);
                    }
                }
            ),
        ];
    }
}
