<?php

namespace App\Http\Controllers;

use App\Models\Saldo;
use App\Models\Catalogocuenta;
use App\Http\Requests\SaldoRequest;

/**
 * Class SaldoController
 * @package App\Http\Controllers
 */
class SaldoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cuentas = Catalogocuenta::all();
        $saldos = Saldo::paginate();

        return view('saldo.index', compact('saldos'))
            ->with('i', (request()->input('page', 1) - 1) * $saldos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cuentas = Catalogocuenta::all();
        $saldo = new Saldo();
        return view('saldo.create', compact('saldo', 'cuentas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SaldoRequest $request)
    {
        Saldo::create($request->validated());

        return redirect()->route('saldos.index')
            ->with('success', 'Saldo created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $saldo = Saldo::find($id);
        $cuentas = Catalogocuenta::all();

        return view('saldo.show', compact('saldo','cuentas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $saldo = Saldo::find($id);

        return view('saldo.edit', compact('saldo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SaldoRequest $request, Saldo $saldo)
    {
        $saldo->update($request->validated());

        return redirect()->route('saldos.index')
            ->with('success', 'Saldo updated successfully');
    }

    public function destroy($id)
    {
        Saldo::find($id)->delete();

        return redirect()->route('saldos.index')
            ->with('success', 'Saldo deleted successfully');
    }
}
