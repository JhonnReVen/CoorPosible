<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use App\Models\Posible;
use Illuminate\Http\Request;

class SimuladorController extends Controller
{
     public function calcularahorro( ){
       
        $tipoAhorro=1;
        $montoApertura=5000;
        $fechaApertura= '20/03/2021';
        $modalidadPago= 2;
        $plazoVencimiento= 180;
        $tiempoPago= 0;
        $tipoMoneda= 266;
 
        $response = Http::get('https://apis.coopacpossible.online/auth/simuladorahorro?tipoAhorro='.$tipoAhorro.'&montoApertura='. $montoApertura.'&fechaApertura='.$fechaApertura.'&modalidadPago='.$modalidadPago.'&plazoVencimiento='.$plazoVencimiento.'&tiempoPago='.$tiempoPago.'&tipoMoneda='.$tipoMoneda.'');

        $data = $response->json();
        dd($data);
        return view('Posible.simuladorahorro',compact('data'));

    }
   
}
