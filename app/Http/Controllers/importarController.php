<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\importCatalogo;

class importarController extends Controller
{
    public function index(Request $request)
    {
        return view('importar.index');
        
    }

    public function importar(Request $request)
    {
        Excel::Import(new importCatalogo, request()->file('file'));
        
        return redirect()->back();
    }
}
