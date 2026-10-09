<?php

namespace App\Filament\Resources\JoiningInstructionResource\Pages;

use App\Filament\Resources\JoiningInstructionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJoiningInstruction extends EditRecord
{
    protected static string $resource = JoiningInstructionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
