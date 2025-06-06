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

Route::get('/about', function () {
    return view('about.index', ["Name" => "Anshraj Solanki"]);
});

Route::get('/teas', function () {

    $teas = [
        ['name' => 'Green Tea', 'price' => 10, 'id' => 1],
        ['name' => 'Black Tea', 'price' => 15, 'id' => 2],
        ['name' => 'Oolong Tea', 'price' => 20, 'id' => 3],
        ['name' => 'White Tea', 'price' => 25, 'id' => 4],
        ['name' => 'Herbal Tea', 'price' => 30, 'id' => 5],
    ];

    return view('teas.index', ['teas' => $teas]);
});


Route::get('/teas/{id}', function ($id) {

    $teas = [
        ['name' => 'Green Tea', 'price' => 10, 'id' => 1],
        ['name' => 'Black Tea', 'price' => 15, 'id' => 2],
        ['name' => 'Oolong Tea', 'price' => 20, 'id' => 3],
        ['name' => 'White Tea', 'price' => 25, 'id' => 4],
        ['name' => 'Herbal Tea', 'price' => 30, 'id' => 5], 
    ];

    return view('teas.teadetails', ['tea' => $teas[$id - 1]]);
});