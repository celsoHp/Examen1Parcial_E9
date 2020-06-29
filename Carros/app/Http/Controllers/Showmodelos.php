<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cliente; 
use App\modelos;

class ShowModelos extends Controller

{


    public function save( Request $request ){

        if( $request ){
            $model = new modelos;    

            $model->Modelo = $request->Modelo;
            $model->description = $request->description;
            $model->Proveedor = $request->Proveedor;
            $model ->color = $request->color;

            if( $models->save() ) {
                return response()->json(["success" => "Datos Guardados correctamente"], 200);
            }
        }

}
   

public function update(Request $request, $id){
  $modelos = modelos::find0rFail($id);
  $modelos->update($request->all());
  return $modelos;
}
public function delete($id){
$modelos = modelos::find0rFail($id);
$modelos->delete();
return 204;
}

/*
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
