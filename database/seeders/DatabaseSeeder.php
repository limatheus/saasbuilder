<?php

namespace Database\Seeders;

use App\Models\Tenant;
use App\Models\Timezone;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            TimezonesSeeder::class,
            CurrenciesSeeder::class,
            CountriesSeeder::class,
            StatesSeeder::class,
        ]);


        if (tenant()) {

            User::factory(20)->create([
                'first_name' => function () {
                    return 'User ';
                },
                'last_name' => function () {
                    return Str::random(5);
                },
                'email' => function () {
                    $username = 'user_' . Str::random(5);
                    return $username . '@' . tenant()->id . '.' . env('APP_DOMAIN');
                }
            ]);

        } else {
            $tenant1 = Tenant::create(['id' => 'delta', 'name' => 'Delta']);
            $tenant1->domains()->create(['domain' => 'delta.' . env('APP_DOMAIN')]);

            $tenant2 = Tenant::create(['id' => 'omega', 'name' => 'Omega']);
            $tenant2->domains()->create(['domain' => 'omega.' . env('APP_DOMAIN')]);

            $timezone = Timezone::where('value', 'America/Sao_Paulo')->first();

            User::create([
                'first_name' => 'Matheus',
                'last_name' => 'Lima',
                'email' => 'contato@matheuslima.com.br',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
                'locale' => \LaravelLocalization::getCurrentLocale(),
                'timezone_id' => $timezone->id
            ]);
        }
    }
}
