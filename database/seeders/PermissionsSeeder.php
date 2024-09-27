<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Reset cached roles and permissions
        //app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $collection = collect([
            'users',
            'roles',
            'permissions',
        ]);

        $collection->each(function ($item, $key) {
            // create permissions for each collection item
            Permission::create(['group' => $item, 'display_name' => 'Create '. $item, 'name' => 'create-' . $item]);
            Permission::create(['group' => $item, 'display_name' => 'View '. $item, 'name' => 'view-' . $item]);
            Permission::create(['group' => $item, 'display_name' => 'Edit '.$item, 'name' => 'manage-' . $item]);
            Permission::create(['group' => $item, 'display_name' => 'Soft delete ' . $item, 'name' => 'soft-delete-' . $item]);
            Permission::create(['group' => $item, 'display_name' => 'Force delete ' . $item, 'name' => 'force-delete-' . $item]);
            Permission::create(['group' => $item, 'display_name' => 'Restore ' . $item, 'name' => 'restore-' . $item]);
        });

        // Create a Super-Admin Role and assign all Permissions
        $super_admin = Role::create(['name' => 'super-admin', 'display_name' => 'Super admin', 'color' => '#111820']);
        $super_admin->givePermissionTo(Permission::all());


        Role::create(['name' => 'admin', 'display_name' => 'Admin', 'color' => '#334155']);

        Role::create(['name' => 'collaborator', 'display_name' => 'Collaborator', 'color' => '#6366F1']);

        Role::create(['name' => 'customer', 'display_name' => 'Customer', 'color' => '#34D399']);




    }
}
