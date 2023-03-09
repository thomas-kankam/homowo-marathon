<?php

namespace App\Filament\Resources\NonGhanaianRevenueResource\Pages;

use App\Filament\Resources\NonGhanaianRevenueResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNonGhanaianRevenues extends ListRecords
{
    protected static string $resource = NonGhanaianRevenueResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
