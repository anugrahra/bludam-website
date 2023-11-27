<?php

namespace App\Filament\Resources\AboutsectionResource\Pages;

use Filament\Pages\Actions;
use Illuminate\Support\Facades\Storage;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\AboutsectionResource;
use App\Models\aboutsection;

class EditAboutsection extends EditRecord
{
    protected static string $resource = AboutsectionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(
                function(aboutsection $record){
                    if($record->background) {
                        Storage::disk('public')->delete($record->background);
                    }
                }
            ),
        ];
    }
}
