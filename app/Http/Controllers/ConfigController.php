<?php

// app/Http/Controllers/ConfigController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SblConfig;
use Illuminate\Support\Facades\Log;

class ConfigController extends Controller
{
    public function index()
    {
        Log::info('Entrando al método index de ConfigController');
        
        try {
            $config = SblConfig::all();
            Log::info('Datos obtenidos exitosamente en index', ['data' => $config]);
            return response()->json($config);
        } catch (\Exception $e) {
            Log::error('Error al obtener datos en index', ['error' => $e->getMessage()]);
            return response()->json(['error' => 'Error al obtener datos'], 500);
        }
    }

    public function update(Request $request, $id)
    {
        Log::info('Entrando al método update de ConfigController', ['id' => $id, 'request' => $request->all()]);
        
        try {
            $config = SblConfig::findOrFail($id);
            Log::info('Registro encontrado en update', ['config' => $config]);

            $config->update($request->all());
            Log::info('Registro actualizado en update', ['config' => $config]);

            return response()->json($config);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            Log::error('Registro no encontrado en update', ['id' => $id, 'error' => $e->getMessage()]);
            return response()->json(['error' => 'Registro no encontrado'], 404);
        } catch (\Exception $e) {
            Log::error('Error al actualizar el registro en update', ['id' => $id, 'error' => $e->getMessage()]);
            return response()->json(['error' => 'Error al actualizar el registro'], 500);
        }
    }

    public function destroy($id)
    {
        Log::info('Entrando al método destroy de ConfigController', ['id' => $id]);
        
        try {
            SblConfig::destroy($id);
            Log::info('Registro eliminado en destroy', ['id' => $id]);

            return response()->json(['message' => 'Registro eliminado']);
        } catch (\Exception $e) {
            Log::error('Error al eliminar el registro en destroy', ['id' => $id, 'error' => $e->getMessage()]);
            return response()->json(['error' => 'Error al eliminar el registro'], 500);
        }
    }
}
