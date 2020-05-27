<?php

use Illuminate\Database\Seeder;

class modelosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            //
            DB::table('modelos')->insert([
                ["Modelo" => "Gol2020", "description" => "Bolsas de aire frontales para conductor y pasajero", "Proveedor" => "Golf", "color" => "verde"],
                ["Modelo" => "vento", "description" => "Sistema antibloqueo de frenos ABS", "Proveedor" => "Nnisa", "color" => "Rojo"],
                ["Modelo" => "Jetta", "description" => "Desempañante y limpiador trasero", "Proveedor" => "Toyota", "color" => "Azul"],
                ["Modelo" => "T-croos", "description" => "Cristales delanteros eléctricos", "Proveedor" => "Chebrolet", "color" => "Blanco"],
            ]);
        }
    }
    }

