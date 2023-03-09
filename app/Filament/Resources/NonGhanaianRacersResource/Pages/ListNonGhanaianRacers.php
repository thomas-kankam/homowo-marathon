<?php

namespace App\Filament\Resources\NonGhanaianRacersResource\Pages;

use App\Filament\Resources\NonGhanaianRacersResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNonGhanaianRacers extends ListRecords
{
    protected static string $resource = NonGhanaianRacersResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
