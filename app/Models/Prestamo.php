<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Prestamo
 *
 * @property $id
 * @property $id_cliente
 * @property $monto
 * @property $interes
 * @property $tipo_pago
 * @property $cuotas
 * @property $fecha_inicio
 * @property $fecha_final
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Prestamo extends Model
{
    
    static $rules = [
		'id_cliente' => 'required',
		'monto' => 'required',
		'interes' => 'required',
		'tipo_pago' => 'required',
		'cuotas' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_cliente','monto','interes','tipo_pago','cuotas','fecha_inicio','fecha_final'];

    // Relación con el modelo Cliente
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }



}
