<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    // public function definition(): array
    // {
    //    return [
    //         'nom' => $this->faker->firstname(),
    //         'prenom' => $this->faker->lastname(),
    //         'photo' => $this->faker->file(),
    //         'ville' => $this->faker->city(),
    //         'age' => $this->faker->number(),
    //         'profession' => $this->faker->text(),
    //         'email' => $this->faker->unique()->safeEmail(),
    //         'role_id' =>rand(2,3),
    //         'email_verified_at' => now(),
    //         'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
    //      ];
    // } 

    // /**
    //  * Indicate that the model's email address should be unverified.
    //  *
    //  * @return $this
    //  */
    // public function unverified(): static
    // {
    //     return $this->state(fn (array $attributes) => [
    //         'email_verified_at' => null,
    //     ]);
    // }
}
