<?php

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('spa');
});

Route::get('/usuario', function(){
    return User::all();
});

Route::post('/usuario', function(){
    // DB::select("CALL procedimiento(?,?,?)", [3, 1, 7]);
    User::create([
        "name" => "admin",
        "email" => "admin@mail.com",
        "password" => "admin54321"
    ]);
    return response()->json(["mensaje" => "Usuario registrado"], 201);
});