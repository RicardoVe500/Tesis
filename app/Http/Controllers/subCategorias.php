<?php

namespace App\Http\Controllers;

use App\Http\Controllers\subCuentasController;
use App\Models\Catalogocuenta;
use App\Http\Requests\CatalogocuentaRequest;
use App\Http\Imports\catalogoCuentasImport;

use Illuminate\Http\Request;

class subCategorias extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($n1)
    {

        $catalogocuentas = Catalogocuenta::where('n1', $n1)->paginate();
        return view('subcuentas.index', compact('catalogocuentas'))
            ->with('i', (request()->input('page', 1) - 1) * $catalogocuentas->perPage());
            
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $reques, $n1)
    {
        $catalogocuenta = new Catalogocuenta();
        $catalogocuenta = Catalogocuenta::find($n1);
        return view('subcuentas.create', compact('catalogocuenta'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Catalogocuenta::create($request->validated());

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
