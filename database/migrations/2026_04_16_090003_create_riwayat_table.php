<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
        Schema::create('riwayat', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade'); // 🔥 INI

        $table->string('nama');
        $table->text('alamat');
        $table->string('pekerjaan');

        $table->integer('jk');
        $table->integer('usia');
        $table->integer('tb');
        $table->integer('bb');
        $table->integer('sistolik');
        $table->integer('diastolik');
        $table->integer('nadi');
        $table->integer('pernapasan');

        $table->string('hasil');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat');
    }
};
