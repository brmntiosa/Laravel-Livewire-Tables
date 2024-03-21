<?php

use App\Livewire\Userlist;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/userlist', Userlist::class);
// Route::post('/userlist/{id}', Userlist::class);
// Route::post('/userlist/update', Userlist::class);
