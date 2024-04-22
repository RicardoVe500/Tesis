<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tipopartida
 *
 * @property $id
 * @property $nombrePartida
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @property Partidaencabezado[] $partidaencabezados
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tipopartida extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $table = 'tipopartida';
    protected $fillable = ['nombrePartida', 'descripcion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partidaencabezados()
    {
        return $this->hasMany(\App\Models\Partidaencabezado::class, 'id', 'tipoPartidaId');
    }
    

}
