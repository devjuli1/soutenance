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
        Schema::create('r_d_v_s', function (Blueprint $table) {
            $table->id();
            $table->string('motifs_consultation');
            $table->string('psychologue');
            $table->foreignId('user_id')->constrained();
            $table->string('email');
            $table->string('password');
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints(); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('r_d_v_s', function (Blueprint $table){
            $table->dropConstrainedForeignId('user_id');
        });
        Schema::dropIfExists('r_d_v_s');
    }
};
