<?php

namespace Database\Seeders;

use App\Enums\UserStatus;
use App\Models\Role;
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

            $this->call([
                PermissionsSeeder::class
            ]);

            $timezone = \App\Models\Timezone::where('value', 'America/Sao_Paulo')->first();
            $role  = Role::where('name', 'super-admin')->first();

            $super_admin = User::create([
                'first_name' => 'Super',
                'last_name' => 'Admin '.ucfirst(tenant()->id),
                'email' => 'admin@' . tenant()->id . '.' . env('APP_DOMAIN'),
                'password' => bcrypt('password'),
                'status' => UserStatus::ACTIVE,
                'remember_token' => Str::random(10),
                'locale' => \LaravelLocalization::getCurrentLocale(),
                'timezone_id' => $timezone->id,
                'email_verified_at' => now(),
            ]);

            $super_admin->assignRole($role);

            tenant()->update(['owner_id'=> $super_admin->id]);

            $collaborator = Role::where('name', 'collaborator')->first();

            User::factory(19)->create()->each(fn($user) => $user->assignRole($collaborator));

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
