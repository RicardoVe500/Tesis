<?php

namespace App\Observers;

use App\Models\bitacora;
use App\Models\CatalogoCuenta;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;



class BitacoraCatalogoCuentasObserver
{
    /**
     * Handle the CatalogoCuenta "created" event.
     */
    public function created(CatalogoCuenta $catalogoCuenta): void
    {
        $this->logMovement('insert', $catalogoCuenta);
    }

    /**
     * Handle the CatalogoCuenta "updated" event.
     */
    public function updated(CatalogoCuenta $catalogoCuenta): void
    {
        $this->logMovement('update', $catalogoCuenta);
    }

    /**
     * Handle the CatalogoCuenta "deleted" event.
     */
    private function logMovement($action, $model)
    {
        $user = Auth::user(); // Se captura el usuario ingresado
    
        //Se crea el primer apartado del Json donde muestra los que hizo el usuario

        $data = [
            'user_id' => $user->id,
            'action' => $action,
            'model_data' => $model->toArray(),
        ];
    
        //Se da formato ha la fecha que se captura 
        $today = Carbon::now()->format('Y-m-d');
    
        // Busca la tabla bitácora para establecer el dia actual
        $bitacora = Bitacora::whereDate('dia', $today)->first();
    
        if (!$bitacora) {
            // Se hace la comprobacion si es el mismo dia donde se hacen las acciones
            //si es diferente se crea otro registro
            $bitacora = new Bitacora();
            $bitacora->dia = $today;
            $bitacora->movimiento = [];
        }
    
        // Obtén los movimientos actuales y agrega el nuevo movimiento
        $movimientos = $bitacora->movimiento;
        if (is_string($movimientos)) {
            $movimientos = json_decode($movimientos, true); // Convertir de JSON a arreglo
        }
        
        // Si $movimientos no es un arreglo con datos, se inicializa como un arreglo vacío
        if (!is_array($movimientos)) {
            $movimientos = [];
        }

        $movimientos[] = $data;
    
        // Guarda los movimientos como JSON en el campo 'movimiento'
        $bitacora->movimiento = json_encode($movimientos);
        $bitacora->save();
    }
}
