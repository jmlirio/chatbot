<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
 use App\Http\Controllers\BotManController;
 Route::match(['get', 'post'], 'botman', [BotManController::class, 'handle']);
 