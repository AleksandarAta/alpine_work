<?php

use Carbon\Month;
use Carbon\Carbon;
use App\Models\Orders;
use Illuminate\Support\Facades\Route;

use function Laravel\Prompts\select;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard/{year?}', function () {
       
        return view('dashboard', );
    })->name('dashboard');
});
