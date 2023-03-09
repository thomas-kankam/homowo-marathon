<?php

namespace App\Filament\Resources\NonGhanaianRacersResource\Pages;

use App\Filament\Resources\NonGhanaianRacersResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNonGhanaianRacers extends EditRecord
{
    protected static string $resource = NonGhanaianRacersResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
