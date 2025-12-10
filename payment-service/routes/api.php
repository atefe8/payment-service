<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::post("/users/register", function (){
   $user = \App\Models\User::query()->create([
       'name' => \request()->get('name'),
       'email' => \request()->get('email'),
       'password' => \Illuminate\Support\Facades\Hash::make(\request()->get('password')),
   ]) ;

    $token = $user->createToken('API Token')->accessToken;

    return response([
        'token' => $token
    ]);
});


Route::get("/users/login", function (){

    $credentials = \request()->only('email', 'password');

    if (!auth()->attempt($credentials)) {
        return response()->json(['message' => 'Invalid credentials'], 401);
    }

    $user = auth()->user();

    return response([
        'token' => $user->createToken('API Token')->accessToken
    ]);
});

