<?php

namespace App\Filament\Resources\JoiningInstructionResource\Pages;

use App\Filament\Resources\JoiningInstructionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJoiningInstructions extends ListRecords
{
    protected static string $resource = JoiningInstructionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
