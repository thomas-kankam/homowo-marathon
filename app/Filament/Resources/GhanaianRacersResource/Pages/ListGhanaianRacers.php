<?php

namespace App\Filament\Resources\GhanaianRacersResource\Pages;

use App\Filament\Resources\GhanaianRacersResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGhanaianRacers extends ListRecords
{
    protected static string $resource = GhanaianRacersResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
