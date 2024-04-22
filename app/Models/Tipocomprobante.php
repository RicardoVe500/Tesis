<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tipocomprobante
 *
 * @property $id
 * @property $nombreComprobante
 * @property $created_at
 * @property $updated_at
 *
 * @property Partidadetalle[] $partidadetalles
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tipocomprobante extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $table = 'tipocomprobante';
    protected $fillable = ['nombreComprobante'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partidadetalles()
    {
        return $this->hasMany(\App\Models\Partidadetalle::class, 'id', 'tipoComprobanteId');
    }
    

}
