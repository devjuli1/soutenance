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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('photo')->nullable();
            $table->string('ville');
            $table->integer('age');
            $table->string('profession')->nullable();
            $table->string('email')->unique();
            $table->foreignId('role_id')->constrained('roles');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints(); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table){
            $table->dropConstrainedForeignId('role_id');
        });
        Schema::dropIfExists('users');
    }
};
