<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posible;

class PosibleController extends Controller
{

    public function index()
    {
        return view('Posible.index');
    }

    
    public function seccioncreditos()
    {
        return view('Posible.seccioncreditos');
    }
    public function prestadiario()
    {
        return view('Posible.prestadiario');
    }
    public function creditomype()
    {
        return view('Posible.creditomype');
    }
    public function creditofijo()
    {
        return view('Posible.creditofijo');
    }

    public function ahorros()
    {
        return view('Posible.ahorros');
    }
    public function ahorromovil()
    {
        return view('Posible.ahorromovil');
    }
    public function ahorrofijo()
    {
        return view('Posible.ahorrofijo');
    }
    public function agenciasposible()
    {
        return view( 'Posible.agencias');
    }
    public function simuladorahorro()
    {
        return view( 'Posible.simuladorahorro');
    }
    public function simuladorcredito()
    {
        return view( 'Posible.simuladorcredito');
    }
    public function grupov()
    {
        return view('Posible.grupo' );
    }
    public function nosotros(){
        return view('Posible.nosotros');
    }
    public function politicas(){
        return view('Posible.politicas');
    }
    public function ahorrainteligente(){
        return view('Posible.ahorrainteligente');
    }

    public function register(){
        return view ('auth.register');
    }

   
}
