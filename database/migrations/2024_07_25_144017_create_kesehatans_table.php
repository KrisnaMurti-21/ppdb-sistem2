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
        Schema::create('kesehatans', function (Blueprint $table) {
            $table->id(); // Id (Primary Key)
            $table->foreignId('id_pendaftaran')->constrained('pendaftarans')->onDelete('cascade')->onUpdate('cascade');
            $table->string('gol_darah', 3); // Gol_darah
            $table->float('tinggi_badan'); // Tinggi_badan
            $table->float('berat_badan'); // Berat_badan
            $table->boolean('alergi'); // Alergi
            $table->text('ket_alergi')->nullable(); // Ket_alergi
            $table->boolean('kronis'); // Kronis
            $table->text('ket_kronis')->nullable(); // Ket_kronis
            $table->boolean('medis'); // Medis
            $table->text('ket_medis')->nullable(); // Ket_medis
            $table->boolean('operasi'); // Operasi
            $table->text('ket_operasi')->nullable(); // Ket_operasi
            $table->boolean('obat'); // Obat
            $table->text('ket_obat')->nullable(); // Ket_obat
            $table->boolean('khusus'); // Khusus
            $table->text('ket_khusus')->nullable(); // Ket_khusus
            $table->text('tambahan')->nullable(); // Tambahan
            $table->timestamps(); // Timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kesehatans');
    }
};
