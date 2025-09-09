<?php

namespace Database\Seeders;

use App\Enums\RoleEnum;
use App\Enums\StatusEnum;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'John Doe',
            'email' => 'admin@example.com',
            'phone' => '1254875855',
            'username' => 'admin',
            'email_verified_at' => now(),
            'password' => bcrypt('123456'),
            'status' => StatusEnum::ACTIVE,
            'country_code' => '+91',
            'is_guest' => false,
        ]);
        $admin->assignRole(RoleEnum::ADMIN);
    }
}
