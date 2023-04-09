<?php

namespace App\Filament\Resources\JobTitleResource\Pages;

use App\Filament\Resources\JobTitleResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageJobTitles extends ManageRecords
{
    protected static string $resource = JobTitleResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
