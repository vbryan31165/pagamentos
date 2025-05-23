<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Prestamo
 *
 * @property $id
 * @property $id_cliente
 * @property $monto
 * @property $tipo_pago
 * @property $cuotas
 * @property $cuotas_actual
 * @property $interes
 * @property $valor_cuota
 * @property $Total_a_pagar
 * @property $Total_a_pagar_juros
 * @property $saldo
 * @property $fecha_inicio
 * @property $fecha_final
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente $cliente
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Prestamo extends Model
{
    
    static $rules = [
		'id_cliente' => 'required',
    'id_usuario' => 'required',
		'monto' => 'required',
		'tipo_pago' => 'required',
		'cuotas' => 'required',
		'cuotas_actual' => 'required',
		'interes' => 'required',
		'valor_cuota' => 'required',
		'Total_a_pagar' => 'required',
		'Total_a_pagar_juros' => 'required',
		'saldo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_cliente','id_usuario','monto','tipo_pago','cuotas','cuotas_actual','interes','valor_cuota','Total_a_pagar','Total_a_pagar_juros','saldo','fecha_inicio','fecha_final','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'id', 'id_cliente');
    }
    

}
