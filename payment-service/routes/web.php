<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/get-products', function (){
    return \Illuminate\Support\Facades\DB::table('products')->get();
});
