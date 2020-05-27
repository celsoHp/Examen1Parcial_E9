<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    
    
        protected $table = 'cliente';
        public function modelos(){
            return $this->hasMany('App\modelos');//, 'cliente_id');
            }
    
}
