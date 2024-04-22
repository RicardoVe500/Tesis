<?php

namespace App\Http\Controllers;

use App\Models\Catalogocuenta;
use Illuminate\Http\Request;
use App\Http\Requests\CatalogocuentaRequest;


class subCuentasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $catalogocuentas = Catalogocuenta::paginate();
 
                            
        return view('subcuenta.index', compact('catalogocuentas'))
            ->with('i', (request()->input('page', 1) - 1) * $catalogocuentas->perPage());
            
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $catalogocuenta = new Catalogocuenta();
        return view('subcuenta.create', compact('catalogocuenta'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CatalogocuentaRequest $request)
    {
        Catalogocuenta::create($request->validated());

        return redirect()->route('subcuentas.index')
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
        $catalogocuenta = Catalogocuenta::find($id);

        return view('subcatalogo.edit', compact('catalogocuenta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Catalogocuenta $catalogocuenta)
    {
        $catalogocuenta->update($request->validated());

        return redirect()->route('subcatalogo.index')
            ->with('success', 'Catalogocuenta updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
