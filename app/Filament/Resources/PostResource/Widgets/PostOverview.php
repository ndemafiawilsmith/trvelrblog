<?php

namespace App\Filament\Resources\PostResource\Widgets;

use App\Models\Post;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\Auth;

class PostOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Posts', Post::where('author_id', Auth::user()->id)->count())
        ];
    }
}
