<?php

use App\Livewire\Blog\ByCategory;
use App\Livewire\Front\BlogDetail;
use App\Livewire\Front\Index;
use App\Livewire\Marketplace;

use App\Livewire\Landing;
use App\Livewire\TourMarketplace;
use Illuminate\Support\Facades\Route;


Route::get('/', Landing::class);
Route::get('/tour-marketplace', TourMarketplace::class);

