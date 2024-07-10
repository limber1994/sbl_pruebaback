<?php

namespace App\Http\Controllers;

use App\Models\BankBook;
use Illuminate\Http\Request;

class BankBookController extends Controller
{
    // Mostrar todos los registros
    public function index()
    {
        $bankbooks = BankBook::all();
        return response()->json($bankbooks);
    }

    // Crear un nuevo registro
    public function store(Request $request)
    {
        // Validar los datos de entrada
        $validatedData = $request->validate([
            'BankId' => 'required|exists:sbl_contentbank,id',
            'studentId' => 'required|integer',
            'observation' => 'required|string|max:255',
            'Grado' => 'required|string|max:255',
        ]);

        // Crear el registro
        $bankbook = BankBook::create($validatedData);

        return response()->json($bankbook, 201); // 201: Created
    }

    // Mostrar un registro específico
    public function show($id)
    {
        $bankbook = BankBook::findOrFail($id);
        return response()->json($bankbook);
    }

    // Actualizar un registro existente
    public function update(Request $request, $id)
    {
        // Validar los datos de entrada
        $validatedData = $request->validate([
            'BankId' => 'sometimes|exists:sbl_contentbank,id',
            'studentId' => 'sometimes|integer',
            'observation' => 'sometimes|string|max:255',
            'Grado' => 'sometimes|string|max:255',
        ]);

        // Buscar y actualizar el registro
        $bankbook = BankBook::findOrFail($id);
        $bankbook->update($validatedData);

        return response()->json($bankbook);
    }

    // Eliminar un registro
    public function destroy($id)
    {
        $bankbook = BankBook::findOrFail($id);
        $bankbook->delete();

        return response()->json(null, 204); // 204: No Content
    }
}
