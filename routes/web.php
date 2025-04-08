<?php

use App\Http\Controllers\HomeController;

use App\Livewire\Landing;
use App\Livewire\TourMarketplace;
use Illuminate\Support\Facades\Route;


Route::get('/', Landing::class)->name('landing');
Route::get('/tour-marketplace', TourMarketplace::class)->name('tour-marketplace');

