<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'username' => 'admin',
            'password' => Hash::make('password123'),
            'full_name' => 'Administrator',
            'email' => 'admin@baksopakkumis.com',
            'role' => 'super_admin',
        ]);

        Admin::create([
            'username' => 'staff',
            'password' => Hash::make('staff123'),
            'full_name' => 'Staff Bakso',
            'email' => 'staff@baksopakkumis.com',
            'role' => 'staff',
        ]);
    }
}
