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
            $table->decimal("monto",10,2);
            $table->decimal("interes",5,2);
            $table->integer("tipo_pago");
            $table->integer("cuotas");
            $table->timestamp('fecha_inicio')->nullable();
            $table->timestamp('fecha_final')->nullable();
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
