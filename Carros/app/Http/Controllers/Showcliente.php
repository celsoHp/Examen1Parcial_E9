<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modelos; 

class Showcliente extends Controller
// {
    
    //
    //public function get_modelos($id){
      //  $cliente = modelos::all()->toArray();
       // dd($cliente);
        
   // }

// } 

{
    
    //
    public function get_modelos($id){
        $cliente = modelos::all();
        //dd($modelos);
       return view('pages.homes', ['modelos' => $cliente]);
    }
    /*
    public function save( Request $request ){

        if( $request ){

            $model = new modelos;    

            $model->Modelo = $request->Modelo;
            $model->description = $request->description;
            $model->Proveedor = $request->Proveedor;
            $model ->color = $request->color;

            if( $model->save() ) {
                return response()->json(["success" => "Datos Guardados correctamente"], 200);
            }
        }

} */

} 