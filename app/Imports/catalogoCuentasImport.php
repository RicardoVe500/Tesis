<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Models\Catalogocuenta;

class catalogoCuentasImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        foreach ($rows as $row) 
        {
            Catalogocuenta::create([
                'n1' => $row[0],
                'n2' => $row[1],
                'n3' => $row[2],
                'n4' => $row[3],
                'n5' => $row[4],
                'n6' => $row[5],
                'n7' => $row[6],
                'n8' => $row[7],
                'noCuenta' => $row[8],
                'CTADependiente' => $row[9],
                'nivelCuenta' => $row[10],
                'nombreCuenta' => $row[11],
                'movimientos' => $row[12],

            ]);
        }
    }
}
