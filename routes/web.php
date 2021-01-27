<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Example01;
use App\Http\Controllers\PriceCalculation;
use App\Http\Controllers\Area;
use App\Http\Controllers\Mul;
use App\Http\Controllers\Mulv2;
use App\Http\Controllers\Mul2;


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
    return redirect('/example-01');
});

Route::get('/example-01', [Example01::class, 'form'])
->name('example-01-form');

Route::post('/example-01', [Example01::class, 'result'])
->name('example-01-result');

Route::get('/area', [Area::class, 'form'])
->name('area-form');

Route::post('/area', [Area::class, 'result'])
->name('area-result');

Route::get('/mul', [Mul::class, 'form'])
->name('mul-form');

Route::post('/mul', [Mul::class, 'result'])
->name('mul-result');

Route::get('/mul2', [Mul2::class, 'form'])
->name('mul2-form');

Route::post('/mul2', [Mul2::class, 'result'])
->name('mul2-result');