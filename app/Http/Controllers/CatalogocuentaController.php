<?php

namespace App\Http\Controllers;

use App\Models\Catalogocuenta;
use App\Http\Requests\CatalogocuentaRequest;

/**
 * Class CatalogocuentaController
 * @package App\Http\Controllers
 */
class CatalogocuentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $catalogocuentas = Catalogocuenta::paginate();

        return view('catalogocuenta.index', compact('catalogocuentas'))
            ->with('i', (request()->input('page', 1) - 1) * $catalogocuentas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $catalogocuenta = new Catalogocuenta();
        return view('catalogocuenta.create', compact('catalogocuenta'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CatalogocuentaRequest $request)
    {
        Catalogocuenta::create($request->validated());

        return redirect()->route('catalogocuentas.index')
            ->with('success', 'Catalogocuenta created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $catalogocuenta = Catalogocuenta::find($id);

        return view('catalogocuenta.show', compact('catalogocuenta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $catalogocuenta = Catalogocuenta::find($id);

        return view('catalogocuenta.edit', compact('catalogocuenta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CatalogocuentaRequest $request, Catalogocuenta $catalogocuenta)
    {
        $catalogocuenta->update($request->validated());

        return redirect()->route('catalogocuentas.index')
            ->with('success', 'Catalogocuenta updated successfully');
    }

    public function destroy($id)
    {
        Catalogocuenta::find($id)->delete();

        return redirect()->route('catalogocuentas.index')
            ->with('success', 'Catalogocuenta deleted successfully');
    }
}
