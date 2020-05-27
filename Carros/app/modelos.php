<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelos extends Model

{
    
    
    protected $table = 'modelos';
    public function modelos(){
        return $this->hasMany('App\cliente');//, 'cliente_id');
        }

}


