<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use App\Models\Posible;
use Illuminate\Http\Request;

class SimuladorController extends Controller
{
     public function calcularahorro( Request $r ){
       
      
    //     return response()->json([
    //         'data' =>'Si llego al controlador',
    //         'r' => $r->plazo
    //    ]);

        
        $tipoAhorro=1;
        $montoApertura=$r->monto;
        $fechaApertura=  $r->fecha;
        $modalidadPago= $r->tipoPago;
        $plazoVencimiento= $r->plazo;
        $tiempoPago= $r->tiempoPago;
        $tipoMoneda= $r->moneda;
      
        $response = Http::get('https://apis.coopacpossible.online/auth/simuladorahorro?tipoAhorro='.$tipoAhorro.'&montoApertura='. $montoApertura.'&fechaApertura='.$fechaApertura.'&modalidadPago='.$modalidadPago.'&plazoVencimiento='.$plazoVencimiento.'&tiempoPago='.$tiempoPago.'&tipoMoneda='.$tipoMoneda.'');

        $data = $response->json();
        

            return response()->json([
            'data' =>'Si llego al controlador',
            'r' =>  $data
       ]);
       // return view('Posible.prueba',compact('data'));

    }
   
}
