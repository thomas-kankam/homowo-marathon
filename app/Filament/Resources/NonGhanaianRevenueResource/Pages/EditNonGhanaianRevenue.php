<?php

namespace App\Filament\Resources\NonGhanaianRevenueResource\Pages;

use App\Filament\Resources\NonGhanaianRevenueResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNonGhanaianRevenue extends EditRecord
{
    protected static string $resource = NonGhanaianRevenueResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
