<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->id();
            $table->foreignId("id_cliente")->constrained('clientes');
            $table->foreignId("id_usuario")->constrained('users');
            $table->decimal("monto",10,2);
            $table->integer("tipo_pago");
            $table->integer("cuotas");
            $table->integer("cuotas_actual");
            $table->decimal("interes",10,2);
            $table->decimal("valor_cuota",10,2);
            $table->decimal("Total_a_pagar",10,2);
            $table->decimal("Total_a_pagar_juros",10,2);
            $table->decimal("saldo",10,2);
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_final')->nullable();
            $table->integer('estado')->nullable();            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestamos');
    }
};
