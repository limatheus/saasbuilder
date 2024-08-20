<?php

namespace Database\Seeders;

use App\Models\Tenant;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        if (tenant()) {

            User::factory()->create([
                'name' => ucfirst(tenant()->id) . ' User',
                'email' => tenant()->id . '@' . tenant()->id . '.'.env('APP_DOMAIN')
            ]);
        } else {
            $tenant1 = Tenant::create(['id' => 'delta']);
            $tenant1->domains()->create(['domain' => 'delta.' . env('APP_DOMAIN')]);

            $tenant2 = Tenant::create(['id' => 'omega']);
            $tenant2->domains()->create(['domain' => 'omega.' . env('APP_DOMAIN')]);
        }
    }
}
