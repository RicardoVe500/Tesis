<?php

namespace App\Http\Controllers;

use App\Http\Controllers\subCuentasController;
use App\Models\Catalogocuenta;
use Barryvdh\DomPDF\Facade\Pdf;

use App\Models\Movimiento;
use App\Http\Controllers\MovimientoController;

use App\Http\Requests\CatalogocuentaRequest;
use App\Http\Imports\catalogoCuentasImport;
use Illuminate\Support\Facades\DB;


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
        //codigo para hacer una busqueda en la tabla principals
        //$queryBuilder = Catalogocuenta::query();
        //if(request(key: 'nombreCuenta') ?? false){
        //    $queryBuilder->where(column:'nombreCuenta', operator:'LIKE', value:'%'.request(key: 'nombreCuenta').'%'); 
        //}
        //$catalogocuentas = $queryBuilder;


        //codigo para filtar el nivel de las cuentas y muestre solo las de nivel 1
        $movimientos = Movimiento::all();
        $catalogocuentas = Catalogocuenta::where('nivelCuenta', 1)->paginate();
        return view('catalogocuenta.index', compact('catalogocuentas','movimientos'))
            ->with('i', (request()->input('page', 1) - 1) * $catalogocuentas->perPage());
            

        //$catalogocuentas = Catalogocuenta::where('nivelCuenta', 1)->paginate();
        //return view('catalogocuenta.index', compact('catalogocuentas'))
         //   ->with('i', (request()->input('page', 1) - 1) * $catalogocuentas->perPage());
    }

    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $movimientos = Movimiento::all();
        $catalogocuenta = new Catalogocuenta();
        return view('catalogocuenta.create', compact('catalogocuenta','movimientos'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CatalogocuentaRequest $request)
    {
        $movimientos = Movimiento::all();

        $validatedData = $request->validated();

        $validatedData = $request->validate([
            'n1'=> 'nullable|string',
            'n2'=> 'nullable|string',
            'CTADependiente'=> 'nullable|string',
            'nombreCuenta'=> 'nullable|string',
            'movimientosid'=> 'nullable|string',
            'nivelCuenta' => 'nullable|integer', 
        ]);

        $validatedData['nivelCuenta'] = $validatedData['nivelCuenta'] ?? 1;

        Catalogocuenta::create($validatedData);
        
        return back()->with('success', 'Catalogocuenta created successfully.');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $movimientos = Movimiento::all();
        $catalogocuenta = Catalogocuenta::find($id);
        return view('catalogocuenta.edit', compact('catalogocuenta', 'movimientos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CatalogocuentaRequest $request, Catalogocuenta $catalogocuenta)
    {
        $catalogocuenta->update($request->validated());

        return back()->with('success', 'Catalogocuenta updated successfully');
    }

    public function destroy($id)
    {
        Catalogocuenta::find($id)->delete();

        return redirect()->back()
            ->with('success', 'Catalogocuenta deleted successfully');
    }

    public function reportecategoria()
    {
        $catalogocuentas = Catalogocuenta::orderBy('id', 'asc')->get();
        $pdf = Pdf::loadView('catalogocuenta.report', compact('catalogocuentas'));
        return $pdf->stream('Catalogo.pdf');

    }

  
}
