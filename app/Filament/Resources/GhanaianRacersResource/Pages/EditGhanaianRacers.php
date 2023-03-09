<?php

namespace App\Filament\Resources\GhanaianRacersResource\Pages;

use App\Filament\Resources\GhanaianRacersResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGhanaianRacers extends EditRecord
{
    protected static string $resource = GhanaianRacersResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
