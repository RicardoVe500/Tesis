<?php

namespace App\Observers;

use App\Models\User;

class BitacoraObserver
{
    /**
     * Handle the User "created" event.
     */
    public function created(User $user): void
    {
        $this->logMovement('insert', $user);
    }

    /**
     * Handle the User "updated" event.
     */
    public function updated(User $user): void
    {
        $this->logMovement('update', $user);
    }

    /**
     * Handle the User "deleted" event.
     */
    public function deleted(User $user): void
    {
        $this->logMovement('delete', $user);
    }

    private function logMovement($action, $model)
    {
        $user = Auth::user(); // Obtener el usuario autenticado (si estás utilizando autenticación)
        $data = [
            'user_id' => $user->id,
            'action' => $action,
            'model_data' => $model->toArray(),
        ];

        $bitacora = Bitacora::whereDate('dia', now()->toDateString())->first();

        if (!$bitacora) {
            $bitacora = new Bitacora();
            $bitacora->dia = now();
            $bitacora->movimiento = [];
        }
        

        $movimientos = $bitacora->movimiento;
        $movimientos[] = $data;
        $bitacora->movimiento = $movimientos;
        $bitacora->save();
    }
    
}
