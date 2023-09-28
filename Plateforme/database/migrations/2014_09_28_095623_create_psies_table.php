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
        Schema::create('psies', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('carriere');
            $table->foreignId('specialite_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints(); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('psies', function (Blueprint $table){
            $table->dropConstrainedForeignId('specialite_id, user-id');
        });
        Schema::dropIfExists('psies');
    }
};
