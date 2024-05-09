<?php

namespace App\Http\Controllers;

use App\Http\Controllers\subCuentasController;
use App\Models\Catalogocuenta;
use App\Http\Imports\catalogoCuentasImport;
use App\Models\Movimiento;
use App\Http\Controllers\MovimientoController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\CatalogocuentaRequest;
use Barryvdh\DomPDF\Facade\Pdf;


class subCategorias extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($n1)
    {
        //codigo para filtrar las subcuentas de la cuenta.
        $movimientos = Movimiento::all();
        $catalogocuentas = Catalogocuenta::where('n1', $n1)->orderBy('nivelCuenta', 'asc')->paginate();
        return view('subcuentas.index', compact('catalogocuentas', 'movimientos'))
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
      
        //se establecen reglas de validacion de los campos.
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
            'movimientosid'=> 'nullable|string',
            'nivelCuenta' => 'nullable|integer', 
            
        ]);

        if (empty($validatedData['movimientosid'])) {
            $validatedData['movimientosid'] = 2;
        }
        
        //se concatenan los datos optenidos de los campos n1 a n8.
        $concatenado = $validatedData['n1'].$validatedData['n2'].$validatedData['n3'].$validatedData['n4'].
        $validatedData['n5'].$validatedData['n6'].$validatedData['n7'].$validatedData['n8'];
        //se captura el dato de nivel de cuenta y se le suma 1.
        $validatedData['nivelCuenta'] = $validatedData['nivelCuenta'] += 1;
        //una ves concatenado los campos de n1 a n8 se le quitan los ultimos 2 digitos para crear 
        //el numero de la cuenta en la cual este depende.
        $CTADependiente = substr($concatenado, 0, -2);

        $validatedData['noCuenta'] = $concatenado;
        $validatedData['CTADependiente'] = $CTADependiente;

        Catalogocuenta::create($validatedData);

        return redirect()->back()
            ->with('success', 'Catalogocuenta created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $movimientos = Movimiento::all();
        $catalogocuenta = Catalogocuenta::find($id);
        return view('catalogocuenta.edit', compact('catalogocuenta', 'movimientos'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {  
        
        $catalogocuenta = Catalogocuenta::findOrFail($id);

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
            'movimientosid' => 'nullable|numeric',
            'nivelCuenta' => 'nullable|integer'
        ]);

        if (empty($validatedData['movimientosid'])) {
            $validatedData['movimientosid'] = 2;
        }
        
        try {
            // Actualiza los atributos del Catalogocuenta con los datos validados
            $catalogocuenta->update($validatedData);
    
            return back()->with('success', 'Catalogocuenta modificado');

        } catch (\Exception $e) {

            // Maneja cualquier error que ocurra durante la actualización
            return redirect()->back()
                             ->with('error', 'Error updating Catalogocuenta: ' . $e->getMessage());

        return back()->with('success', 'Catalogocuenta modificado');
    }
 }
 

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function reportecategoria()
    {
        $catalogocuentas = Catalogocuenta::orderBy('id', 'asc')->get();
        $pdf = Pdf::loadView('catalogocuenta.report', compact('catalogocuentas'));
        return $pdf->stream('Catalogo.pdf');

    }

}
