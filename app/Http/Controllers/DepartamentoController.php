<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Municipio;

class DepartamentoController extends Controller
{
    public function getCities(Request $request){     
        if ($request->ajax()) {
            $ciudades = Municipio::where('departamento_id', '=', $request->departamento)->get();

            foreach ($ciudades as $keyCity => $city) {
                $arrayCities[$city->id] = $city->nombre;
            }

            return response()->json($arrayCities);
        }
    }
}
