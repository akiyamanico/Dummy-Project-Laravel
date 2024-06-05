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
        Schema::create('data_customer', function(Blueprint $table){
            $table->id()->primary();
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('telpon');
            $table->string('tanggallahir');
            $table->string('alamat');
            $table->string('buktipembayaran');
            $table->string('statuspembayaran');
            $table->string('id_paket');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_customer');
    }
};
