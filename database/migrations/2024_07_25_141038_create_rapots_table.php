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
        Schema::create('rapots', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pendaftaran');
            $table->foreign('id_pendaftaran')->references('id')->on('pendaftarans')->onDelete('cascade');
            $table->decimal('mtk_7s1', 5, 2);
            $table->decimal('inggris_7s1', 5, 2);
            $table->decimal('ipa_7s1', 5, 2);
            $table->decimal('mtk_7s2', 5, 2);
            $table->decimal('inggris_7s2', 5, 2);
            $table->decimal('ipa_7s2', 5, 2);
            $table->decimal('mtk_8s1', 5, 2);
            $table->decimal('inggris_8s1', 5, 2);
            $table->decimal('ipa_8s1', 5, 2);
            $table->decimal('mtk_8s2', 5, 2);
            $table->decimal('inggris_8s2', 5, 2);
            $table->decimal('ipa_8s2', 5, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rapots');
    }
};
