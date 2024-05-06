<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Movimiento;
use NullableFields;

/**
 * Class Catalogocuenta
 *
 * @property $id
 * @property $n1
 * @property $n2
 * @property $n3
 * @property $n4
 * @property $n5
 * @property $n6
 * @property $n7
 * @property $n8
 * @property $noCuenta
 * @property $CTADependiente
 * @property $nivelCuenta
 * @property $nombreCuenta
 * @property $movimientosid
 * @property $created_at
 * @property $updated_at
 *
 * @property Movimiento $movimiento
 * @property CatalogoSucursal[] $catalogoSucursals
 * @property Partidadetalle[] $partidadetalles
 * @property Saldo[] $saldos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Catalogocuenta extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $table = 'catalogocuentas';
    protected $nullable = '*';
    protected $fillable = ['n1', 'n2', 'n3', 'n4', 'n5', 'n6', 'n7', 'n8', 'noCuenta', 'CTADependiente', 'nivelCuenta', 'nombreCuenta', 'movimientosid'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function movimiento()
    {
        return $this->belongsTo(\App\Models\Movimiento::class, 'movimientosid', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function catalogoSucursals()
    {
        return $this->hasMany(\App\Models\CatalogoSucursal::class, 'id', 'cuentaId');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partidadetalles()
    {
        return $this->hasMany(\App\Models\Partidadetalle::class, 'id', 'cuentaId');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function saldos()
    {
        return $this->hasMany(\App\Models\Saldo::class, 'id', 'cuentaId');
    }
    

}
