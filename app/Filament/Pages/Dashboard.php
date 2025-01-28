<?php

namespace App\Filament\Pages;

use App\Filament\Resources\PostResource\Widgets\PostOverview;

class Dashboard extends \Filament\Pages\Dashboard
{
    // ...
    protected static string $routePath = '/';
    protected static ?string $title = 'Dashboard';



    protected function getHeaderWidgets(): array
    {
        return [
            PostOverview::class
        ];
    }
}
