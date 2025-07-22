<?php

use App\Http\Controllers\Omen;
use App\Http\Controllers\main;
use App\Http\Controllers\chamber;
use App\Http\Controllers\ControllerContact;
use Illuminate\Support\Facades\Route;

Route::resource('main', main::class);

Route::resource('home', Omen::class);

Route::resource('about', chamber::class);


Route::resource('contact', ControllerContact::class);
