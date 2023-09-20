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
            'age' =>'25',
            'profession'=>'etudiant',
            'email' =>'nico@gmail.com',
            'password'=>Hash::make('123456'),
            'role_id' => 1
        ]);
        User::create([
            'nom'=>'OUEDRAOGO',
            'prenom' =>'Jeannine',
            'ville'=>'Ouagadougou',
            'age' =>'28',
            'profession'=>'Developpeur',
            'email' =>'jeannine@gmail.com',
            'password'=>Hash::make('12345678'),
            'role_id' => 1
        ]);
    }
}
