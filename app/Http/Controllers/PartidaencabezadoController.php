<?php

namespace App\Http\Controllers;

use App\Models\Partidaencabezado;
use App\Models\Tipopartida;
use App\Http\Requests\PartidaencabezadoRequest;

/**
 * Class PartidaencabezadoController
 * @package App\Http\Controllers
 */
class PartidaencabezadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipopartidas = Tipopartida::all();
        $partidaencabezados = Partidaencabezado::paginate();

        return view('partidaencabezado.index', compact('partidaencabezados'))
            ->with('i', (request()->input('page', 1) - 1) * $partidaencabezados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tipopartidas = Tipopartida::all();
        $partidaencabezado = new Partidaencabezado();
        return view('partidaencabezado.create', compact('partidaencabezado','tipopartidas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PartidaencabezadoRequest $request)
    {
        Partidaencabezado::create($request->validated());

        return redirect()->route('partidaencabezados.index')
            ->with('success', 'Partidaencabezado created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $partidaencabezado = Partidaencabezado::find($id);
        return view('partidaencabezado.show', compact('partidaencabezado'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $tipopartidas = Tipopartida::all();
        $partidaencabezado = Partidaencabezado::find($id);

        return view('partidaencabezado.edit', compact('partidaencabezado', 'tipopartidas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PartidaencabezadoRequest $request, Partidaencabezado $partidaencabezado)
    {
       
        $partidaencabezado->update($request->validated());

        return redirect()->route('partidaencabezados.index')
            ->with('success', 'Partidaencabezado updated successfully');
    }

    public function destroy($id)
    {
        Partidaencabezado::find($id)->delete();

        return redirect()->route('partidaencabezados.index')
            ->with('success', 'Partidaencabezado deleted successfully');
    }
}
