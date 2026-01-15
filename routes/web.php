<?php

use App\Http\Controllers\GiftController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // redirection pour appeler le GiftController directement avec les données
    return redirect()->route('gifts.index');
});

Route::resource('gifts', GiftController::class);
