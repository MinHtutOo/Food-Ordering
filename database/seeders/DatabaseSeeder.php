<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $permissions = [
            'restaurant_list',
            'restaurant_edit',
            'restaurant_delete',
            'restaurant_restore',
        ];
        $role = Role::create(['name' => 'admin', 'guard_name' => 'web']);
        foreach($permissions as $permission) {
            Permission::create([
                'name' => $permission, 'guard_name' => 'web'
            ]);
        }
        $permissionId = Permission::pluck('id')->toArray();
        $role->syncPermissions($permissionId);
       //  \App\Models\User::factory(1)->create();

        $user = User::factory()->create([
            'name' => 'admin',
            'email' => 'jack@gmail.com',      
        ]);
        $user->assignRole('admin');
    }
}
