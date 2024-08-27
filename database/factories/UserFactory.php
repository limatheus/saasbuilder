<?php

namespace Database\Factories;

use App\Enums\UserStatus;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $first_name = $this->faker->firstName;
        $last_name = $this->faker->lastName;
        $timezone = \App\Models\Timezone::where('value', 'America/Sao_Paulo')->first();


        return [
            'first_name' =>$first_name,
            'last_name' => $last_name,
            'email' => preg_replace("/[^a-zA-Z]/", "", strtolower($first_name)).'.'.preg_replace("/[^a-zA-Z]/", "", strtolower($last_name)).'@'.env('APP_DOMAIN'),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'locale' => \LaravelLocalization::getCurrentLocale(),
            'timezone_id' => $timezone->id,
            'status' =>$this->faker->randomElement(array_column(UserStatus::cases(), 'value')),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
