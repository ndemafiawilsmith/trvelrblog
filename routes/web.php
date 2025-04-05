<?php

use App\Http\Controllers\HomeController;

use App\Livewire\Landing;
use App\Livewire\TourMarketplace;
use Illuminate\Support\Facades\Route;


Route::get('/', Landing::class);
Route::get('/tour-marketplace', TourMarketplace::class);

