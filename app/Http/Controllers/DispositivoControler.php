<?php

namespace App\Http\Controllers;

use App\Models\Sensor;
use Illuminate\Http\Request;

class DispositivoControler extends Controller
{
    // Acessar o sensor 
    // retornar o status do sensor 
    // buscar pelo código, se existur retornar o status 

    public function show($codigo)
    {
        $sensor = Sensor::where('codigo', $codigo)->first(); // pega sempre o primeiro
        if (!$sensor) {
        return response()->json(['error' => 'sensor não encontrado'], 404);
    }
    
    return response()->json([
        'success' => 'sensor encontrado',
        'status' => $sensor->status
    ]);
    }

    public function update(Request $request)
    {

        $sensor = Sensor::where('codigo', $request->codigo)->first(); 
        if (!$sensor) {
            return response()->json(['error' => 'sensor não encontrado'], 404);
        }

        $sensor->status = !$sensor->status;
        $sensor->save();

        return response()->json([
            'message' => 'Status atualizado com sucesso',
            'data' => $sensor->status
        ]);
    }
}
