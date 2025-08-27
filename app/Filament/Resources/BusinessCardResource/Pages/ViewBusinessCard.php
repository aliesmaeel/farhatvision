<?php

namespace App\Filament\Resources\BusinessCardResource\Pages;

use App\Filament\Resources\BusinessCardResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewBusinessCard extends ViewRecord
{
    protected static string $resource = BusinessCardResource::class;



    protected function getViewData(): array
    {
        return [
            'record' => $this->record,
        ];
    }

    public function getView(): string
    {
        return 'filament.resources.business-cards.view-business-card';
    }
}
