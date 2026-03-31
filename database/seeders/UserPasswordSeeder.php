<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserPasswordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::whereIn('email', ['sung@gmail.com', 'charles@gmail.com'])
        ->update(['password' => \Illuminate\Support\Facades\Hash::make('password123')]);
    }
}
