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
        Schema::create('temoignages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('comment');
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints(); 

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('temoignages', function (Blueprint $table){
            $table->dropConstrainedForeignId('user_id');
        });
        Schema::dropIfExists('temoignages');
    }
    
};
