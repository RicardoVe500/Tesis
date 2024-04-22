<?php

namespace App\Http\Controllers;

use App\Models\Tipopartida;
use App\Models\Partidaencabezado;
use App\Http\Controllers\PartidaencabezadoController;


use App\Http\Requests\TipopartidaRequest;

/**
 * Class TipopartidaController
 * @package App\Http\Controllers
 */
class TipopartidaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipopartidas = Tipopartida::paginate();

        return view('tipopartida.index', compact('tipopartidas'))
            ->with('i', (request()->input('page', 1) - 1) * $tipopartidas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tipopartida = new Tipopartida();
        return view('tipopartida.create', compact('tipopartida'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TipopartidaRequest $request)
    {
        Tipopartida::create($request->validated());

        return redirect()->route('tipopartidas.index')
            ->with('success', 'Tipopartida created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $tipopartida = Tipopartida::find($id);

        return view('tipopartida.show', compact('tipopartida'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $tipopartida = Tipopartida::find($id);

        return view('tipopartida.edit', compact('tipopartida'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TipopartidaRequest $request, Tipopartida $tipopartida)
    {
        $tipopartida->update($request->validated());

        return redirect()->route('tipopartidas.index')
            ->with('success', 'Tipopartida updated successfully');
    }

    public function destroy($id)
    {
        Tipopartida::find($id)->delete();

        return redirect()->route('tipopartidas.index')
            ->with('success', 'Tipopartida deleted successfully');
    }
}
