<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RoleUserSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Isi Tabel Roles sesuai Use Case 
        $adminRole = Role::updateOrCreate(['id' => 1], ['role_name' => 'Admin']);
        $organizerRole = Role::updateOrCreate(['id' => 2], ['role_name' => 'Organizer']);
        $customerRole = Role::updateOrCreate(['id' => 3], ['role_name' => 'Customer']);

        // 2. Update User 'sung' sebagai Admin
        User::where('email', 'sung@gmail.com')->update([
            'password' => Hash::make('password123'),
            'roles_id' => 1
        ]);

        // 3. Update User 'charles' sebagai Organizer
        User::where('email', 'charles@gmail.com')->update([
            'password' => Hash::make('password123'),
            'roles_id' => 2
        ]);
        
        $this->command->info('Role dan User Berhasil Diperbarui!');
    }
}