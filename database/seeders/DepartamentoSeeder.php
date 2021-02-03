<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Departamento;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Departamento::insert(['nombre' => 'Atlantico', 'codigo' => 1]);
        Departamento::insert(['nombre' => 'Bolivar', 'codigo' => 2]);
    }
}
