<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Customer;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    protected static ?string $password;
    
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'Jenna',
            'email' => 'jenna@gmail.com',
            'password' => static::$password ??= Hash::make('password'),
        ]);
        $user->assignRole('owner');
    }
}
