<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nom'=>'YE',
            'prenom' =>'nico',
            'ville'=>'Yanyan',
            'profession'=>'etudiant',
            'email' =>'nico@gmail.com',
            'password'=>Hash::make('123456'),
            'role_id' => 1
        ]);
    }
}
