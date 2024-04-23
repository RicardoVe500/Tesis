<?php

namespace App\Imports;

use App\Models\Catalogocuenta;
use Maatwebsite\Excel\Concerns\ToModel;

class importCatalogo implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Catalogocuenta([
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
