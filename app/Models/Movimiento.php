<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Movimiento
 *
 * @property $id
 * @property $movimientos
 * @property $created_at
 * @property $updated_at
 *
 * @property Catalogocuenta[] $catalogocuentas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Movimiento extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    
    protected $table = 'movimientos';
    protected $fillable = ['movimientos'];



    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function catalogocuentas()
    {
        return $this->hasMany(\App\Models\Catalogocuenta::class, 'id', 'movimientosid');
    }
    
    

}
