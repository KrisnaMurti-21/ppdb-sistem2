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
        Schema::create('parent_bio_ibus', function (Blueprint $table) {
            $table->id(); // Id (Primary Key)
            $table->foreignId('id_bio')->constrained('biodatas')->onDelete('cascade')->onUpdate('cascade'); // Id_bio (Foreign Key)
            $table->string('nama'); // Nama
            $table->string('pekerjaan'); // Pekerjaan
            $table->string('telephone'); // Telephone
            $table->text('alamat'); // Alamat
            $table->string('kota'); // Kota
            $table->string('provinsi'); // Provinsi
            $table->timestamps(); // Timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parent_bio_ibus');
    }
};
