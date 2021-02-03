<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Municipio;

class MunicipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Municipio::insert(['departamento_id' => 1, 'codigo' => 1, 'nombre' => 'Barranquilla']);
        Municipio::insert(['departamento_id' => 2, 'codigo' => 2, 'nombre' => 'Cartagena']);
    }
}
