<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'restaurant_create']);

        Permission::create(['name' => 'role_list']);
        Permission::create(['name' => 'role_create']);
        Permission::create(['name' => 'role_update']);
        Permission::create(['name' => 'role_delete']);

        Permission::create(['name' => 'owner_list']);
        Permission::create(['name' => 'owner_update']);
        Permission::create(['name' => 'owner_delete']);
        Permission::create(['name' => 'owner_restore']);

        Permission::create(['name' => 'customer_list']);
        Permission::create(['name' => 'customer_update']);
        Permission::create(['name' => 'customer_delete']);
        Permission::create(['name' => 'customer_restore']);

        Permission::create(['name' => 'order_list']);
        Permission::create(['name' => 'order_update']);
        Permission::create(['name' => 'order_delete']);
        Permission::create(['name' => 'order_restore']);

    }
}
