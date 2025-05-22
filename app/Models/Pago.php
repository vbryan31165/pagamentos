<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pago
 *
 * @property $id
 * @property $prestamo_id
 * @property $fecha_pago
 * @property $monto_pagado
 * @property $cuota_numero
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pago extends Model
{
    
    static $rules = [
		'prestamo_id' => 'required',
		'fecha_pago' => 'required',
		'monto_pagado' => 'required',
		'cuota_numero' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['prestamo_id','fecha_pago','monto_pagado','cuota_numero'];



}
