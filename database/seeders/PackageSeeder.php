<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Package::create([
            'name' => 'Family Package',
            'description' => 'Perfect for family dinner - 4 bowls of original bakso with drinks',
            'price' => 65000,
            'photo' => 'package-family.jpg',
            'is_active' => true,
        ]);

        Package::create([
            'name' => 'Couple Package',
            'description' => '2 bowls of jumbo bakso with 2 drinks - romantic dinner for two',
            'price' => 45000,
            'photo' => 'package-couple.jpg',
            'is_active' => true,
        ]);

        Package::create([
            'name' => 'Student Package',
            'description' => 'Affordable package for students - bakso with drink',
            'price' => 18000,
            'photo' => 'package-student.jpg',
            'is_active' => true,
        ]);
    }
}
