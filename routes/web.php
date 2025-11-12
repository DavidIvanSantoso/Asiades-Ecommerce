<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app');
});

//homepage
Route::get('/', function () {
    return view('homepage');

});

// productpage
Route::get('/products', function() {
    return view('livewire.product-page'); // products.blade.php
});


