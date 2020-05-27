<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cliente; 

class Showmodelos extends Controller

{
    
    //
    public function get_cliente($id){
        $modelos = cliente::all();
        //dd($modelos);
       return view('pages.home', ['cliente' => $modelos]);
    }

} 
