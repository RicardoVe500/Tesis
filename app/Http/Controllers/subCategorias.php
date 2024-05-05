<?php

namespace App\Http\Controllers;

use App\Http\Controllers\subCuentasController;
use App\Models\Catalogocuenta;
use App\Http\Imports\catalogoCuentasImport;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\CatalogocuentaRequest;

class subCategorias extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($n1)
    {

        //codigo para filtrar las subcuentas de la cuenta.
        $catalogocuentas = Catalogocuenta::where('n1', $n1)->paginate();
        return view('subcuentas.index', compact('catalogocuentas'))
            ->with('i', (request()->input('page', 1) - 1) * $catalogocuentas->perPage());
            
    }

    /**
     * Show the form for creating a new resource
     */
    public function create(Request $reques, $id)
    {
        
        $catalogocuenta = new Catalogocuenta();
        $catalogocuenta = Catalogocuenta::find($id);
        //capturamos el valor de nivel de cuenta y le agregamos uno al que seleccionamos
        $catalogocuenta->nivelCuenta = $catalogocuenta->nivelCuenta + 1;

        return view('subcuentas.create', compact('catalogocuenta'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'n1'=> 'nullable|string',
            'n2'=> 'nullable|string',
            'n3'=> 'nullable|string',
            'n4'=> 'nullable|string',
            'n5'=> 'nullable|string',
            'n6'=> 'nullable|string',
            'n7'=> 'nullable|string',
            'n8'=> 'nullable|string',
            'noCuenta'=> 'nullable|string',
            'CTADependiente'=> 'nullable|string',
            'nombreCuenta'=> 'nullable|string',
            'movimientos'=> 'nullable|string',
            'nivelCuenta' => 'nullable|integer', 
            // Agrega aquí más reglas de validación según tus necesidades
        ]);

        $validatedData['nivelCuenta'] = $validatedData['nivelCuenta'] += 1;
        Catalogocuenta::create($validatedData);

        return redirect()->back()
            ->with('success', 'Catalogocuenta created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
