<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class clientFactory extends Factory
{
    protected $model = client::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->firstname(),
            'prenom' => $this->faker->lastname(),
            'ville' => $this->faker->city(),
            'profession' => $this->faker->nullable()->text(),
            'email' => $this->faker->unique()->safeEmail(),
            'role_id' =>rand(2,3),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
           
        ];
    }
}
