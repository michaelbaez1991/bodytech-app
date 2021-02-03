<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Persona;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Persona::insert(['identificacion' => '1031721821', 'tipo_identificacion' => 'CC', 'primer_nombre' => 'Andres', 'segundo_nombre' => 'Camilo', 'primer_apellido' => 'Guzman', 'segundo_apellido' => 'Mendoza', 'direccion' => 'Bogota Dc', 'telefono' => '4567896', 'correo' => 'andres.camilo@gmail.com', 'ocupacion' => 'Abogado', 'departamento_id' => 1, 'municipio_id' => 1]);
    }
}
