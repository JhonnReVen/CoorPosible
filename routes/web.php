<?php

use App\Http\Controllers\PosibleController;
use Illuminate\Support\Facades\Route;

//Index
Route::get('/', function () {
    return view('Posible/index');
});

Route::post('/calculadora', 'App\Http\Controllers\SimuladorController@calcularahorro')->name('calculadora.ahorro');
Route::view('/index','Posible/index')->name('index');

//Seccion de creditos
Route::view('/seccioncreditos','Posible/seccioncreditos')->name('seccioncreditos');

Route::view('/creditofijo','Posible/creditofijo')->name('creditofijo');
Route::view('/prestadiario','Posible/prestadiario')->name('prestadiario');
Route::view('/creditomype','Posible/creditomype')->name('creditomype');

//Seccion de ahorros
Route::view('/ahorros','Posible/ahorros')->name('ahorros');

Route::view('/ahorromovil','Posible/ahorromovil')->name('ahorromovil');
Route::view('/ahorrofijo','Posible/ahorrofijo')->name('ahorrofijo');

//Agencias y grupo
Route::view('/agencias','Posible/agencias')->name('agencias');
Route::view('/grupo', 'Posible/grupo')->name('grupo');
Route::view('/nosotros', 'Posible/nosotros')->name('nosotros');
Route::view('/plansocio', 'Posible/plansocio')->name('plansocio');

Route::view('/simuladorahorro', 'Posible/simuladorahorro')->name('simuladorahorro');
Route::view('/simuladorcredito', 'Posible/simuladorcredito')->name('simuladorcredito');
Route::view('/politicas', 'Posible/politicas')->name('politicas');
Route::view('/ahorrainteligente', 'Posible/ahorrainteligente')->name('ahorrainteligente');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
