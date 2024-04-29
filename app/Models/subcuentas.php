<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use NullableFields;

class subcuentas extends Model
{
   

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $table = 'catalogocuentas';
    protected $nullable = '*';
    protected $fillable = ['n1', 'n2', 'n3', 'n4', 'n5', 'n6', 'n7', 'n8', 'noCuenta', 'CTADependiente', 'nivelCuenta', 'nombreCuenta', 'movimientos'];


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

    public function scopeSearch($query, string $nombre)
    {

    }


}
