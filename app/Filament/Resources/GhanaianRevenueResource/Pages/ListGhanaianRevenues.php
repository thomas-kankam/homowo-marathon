<?php

namespace App\Filament\Resources\GhanaianRevenueResource\Pages;

use App\Filament\Resources\GhanaianRevenueResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGhanaianRevenues extends ListRecords
{
    protected static string $resource = GhanaianRevenueResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
