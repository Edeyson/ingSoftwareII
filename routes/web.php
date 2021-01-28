<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('formaII', function () {
    $name = "Edeyson Bermeo";
    $id = 1002860585;
    return view('formaII')->with(['name' => $name, 'id' => $id]);
});

Route::get('formaIII', function () {
    $name = "Edeyson Bermeo";
    $id = 1002860585;
    return view('formaIII', ['name' => $name, 'id' => $id]);
});

Route::get('formaIV', function () {
    $name = "Edeyson Bermeo";
    $id = 1002860585;
    return view('formaIV', compact(['name', 'id']));
});


Route::get('listaframeworks', function () {
       return view('listaframeworks');
});
