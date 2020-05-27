<?php

use Illuminate\Database\Seeder;

class clienteSeeder extends Seeder
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
            DB::table('cliente')->insert([
                ["nombre" => "Juan", "Apaterno" => "Pacheco", "Amaterno" => "Huc", "matricula" => "njfskdnfkj"],
                ["nombre" => "Pedro", "Apaterno" => "Hoil", "Amaterno" => "Dominguez", "matricula" => "hduehfka"],
                ["nombre" => "Andre", "Apaterno" => "Gonzales", "Amaterno" => "Salvador", "matricula" => "nadnkjdje"],
                ["nombre" => "Pablo", "Apaterno" => "Zanches", "Amaterno" => "Pech", "matricula" => "andkanedlk"],
            ]);
        }
    }
    }
