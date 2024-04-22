<?php

namespace App\Http\Controllers;

use App\Models\Tipocomprobante;
use App\Http\Requests\TipocomprobanteRequest;

/**
 * Class TipocomprobanteController
 * @package App\Http\Controllers
 */
class TipocomprobanteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipocomprobantes = Tipocomprobante::paginate();

        return view('tipocomprobante.index', compact('tipocomprobantes'))
            ->with('i', (request()->input('page', 1) - 1) * $tipocomprobantes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tipocomprobante = new Tipocomprobante();
        return view('tipocomprobante.create', compact('tipocomprobante'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TipocomprobanteRequest $request)
    {
        Tipocomprobante::create($request->validated());

        return redirect()->route('tipocomprobantes.index')
            ->with('success', 'Tipocomprobante created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $tipocomprobante = Tipocomprobante::find($id);

        return view('tipocomprobante.show', compact('tipocomprobante'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $tipocomprobante = Tipocomprobante::find($id);

        return view('tipocomprobante.edit', compact('tipocomprobante'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TipocomprobanteRequest $request, Tipocomprobante $tipocomprobante)
    {
        $tipocomprobante->update($request->validated());

        return redirect()->route('tipocomprobantes.index')
            ->with('success', 'Tipocomprobante updated successfully');
    }

    public function destroy($id)
    {
        Tipocomprobante::find($id)->delete();

        return redirect()->route('tipocomprobantes.index')
            ->with('success', 'Tipocomprobante deleted successfully');
    }
}
