<?php

namespace App\Http\Controllers;

use App\Http\Controllers\subCuentasController;
use App\Models\Catalogocuenta;
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
        //$queryBuilder = Catalogocuenta::query();
        //if(request(key: 'nombreCuenta') ?? false){
        //    $queryBuilder->where(column:'nombreCuenta', operator:'LIKE', value:'%'.request(key: 'nombreCuenta').'%'); 
        //}
        //$catalogocuentas = $queryBuilder;

        $catalogocuentas = Catalogocuenta::where('nivelCuenta', 1)->paginate();
        return view('catalogocuenta.index', compact('catalogocuentas'))
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

        return redirect()->back()
            ->with('success', 'Catalogocuenta deleted successfully');
    }

  
}
