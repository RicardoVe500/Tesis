<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tipopartida;

/**
 * Class Partidaencabezado
 *
 * @property $id
 * @property $tipoPartidaId
 * @property $codigoPartida
 * @property $fechaContable
 * @property $fechaActual
 * @property $noCuenta
 * @property $debe
 * @property $haber
 * @property $diferenca
 * @property $conceptoGeneral
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Tipopartida $tipopartida
 * @property Partidadetalle[] $partidadetalles
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Partidaencabezado extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $table = 'partidaencabezado';
    protected $fillable = ['tipoPartidaId', 'codigoPartida', 'fechaContable', 'fechaActual', 'debe', 'haber', 'diferenca', 'conceptoGeneral', 'estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipopartida()
    {
        return $this->belongsTo(\App\Models\Tipopartida::class, 'tipoPartidaId', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partidadetalles()
    {
        return $this->hasMany(\App\Models\Partidadetalle::class, 'id', 'encabezadoId');
    }
    

}
