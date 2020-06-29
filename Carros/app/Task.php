<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
   // protected $fillable = ['Modelo', 'description', 'Proveedor', 'color'];
    
   protected $table = 'modelos';
    public function modelos(){
        return $this->hasMany('App\Task');//, 'cliente_id');
        } 
}
