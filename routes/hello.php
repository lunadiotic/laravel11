<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return 'Hello, world!';
});


Route::get('/hello/{name}/{age?}/', function ($name, $age = null) {
    return 'Hello, ' . $name . ' ' . $age;
});


Route::get('/foo', function () {
    // return route('route-foo');

    return redirect()->route('route-bar');
})->name('route-foo');

Route::get('/bar', function () {
    return 'url(' . route('route-bar') . ')';
})->name('route-bar');

Route::prefix('/admin')->name('admin.')->group(function () {
    Route::get('/foo', function () {
        return 'Hello, Admin!';
    })->name('route-foo');

    Route::get('/bar', function () {
        return 'Hello, Admin!';
    })->name('route-bar');
});
