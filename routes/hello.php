<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return 'Hello, world!';
});


Route::get('/hello/{name}/{age?}/', function ($name, $age = null) {
    return 'Hello, ' . $name . ' ' . $age;
});
