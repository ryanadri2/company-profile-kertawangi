<?php

namespace App\Filament\Resources\GaleriResource\Pages;

use App\Filament\Resources\GaleriResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGaleris extends ListRecords
{
    protected static string $resource = GaleriResource::class;
    protected static ?string $title = 'Galeri';

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
