<?php

use App\Events\TestEvent;
use App\Events\TestEvent2;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    TestEvent::dispatch();
    TestEvent2::dispatch();

    return view('welcome');
});
