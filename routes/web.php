<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $client = \App\Models\User::latest()->first();

    $client->notify(new \App\Notifications\AccountActivated());
    return view('welcome');
});

