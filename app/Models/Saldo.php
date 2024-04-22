<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Saldo
 *
 * @property $id
 * @property $cuentaId
 * @property $debe
 * @property $haber
 * @property $fecha
 * @property $saldo
 * @property $saldoDia
 * @property $saldoAnterior
 * @property $created_at
 * @property $updated_at
 *
 * @property Catalogocuenta $catalogocuenta
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Saldo extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $table = 'saldo';
    protected $fillable = ['cuentaId', 'debe', 'haber', 'fecha', 'saldo', 'saldoDia', 'saldoAnterior'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function catalogocuenta()
    {
        return $this->belongsTo(\App\Models\Catalogocuenta::class, 'cuentaId', 'id');
    }
    

}
