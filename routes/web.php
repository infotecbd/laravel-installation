<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\TestController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/api/endpoint', [TestController::class, 'TestApi']);

Route::get('/api/endpoint', [TestController::class, 'ApiData']);
Route::post('/uploads', [TestController::class, 'FileUpload']);

Route::get('/', function (Request $request) {
  return $request->header('User-Agent');

    return view('welcome');
});


Route::get('/form', function () {
    return view('form');
});

Route::post('/submit', function (Request $request) {
    $name = $request->input('name');

    return redirect('/form')->with('success', 'Hi ' .$name . ', Your Form submitted successfully!');
});


Route::view('/hello', 'hello');
