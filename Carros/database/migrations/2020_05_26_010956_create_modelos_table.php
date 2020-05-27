<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    
        {
            Schema::create('modelos', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('Modelo', 30);
                $table->string('description', 100);
                $table->string('Proveedor', 100);
                $table->string('color', 80);
                $table->timestamps();
                $table->softDeletes('deleted_at',0);
            });
        }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modelos');
    }
}
