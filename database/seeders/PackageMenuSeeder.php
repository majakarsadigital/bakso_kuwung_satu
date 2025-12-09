<?php

namespace Database\Seeders;

use App\Models\PackageMenu;
use Illuminate\Database\Seeder;

class PackageMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PackageMenu::create([
            'package_id' => 1,
            'menu_id' => 1, // Bakso Original
            'quantity' => 4,
        ]);
        PackageMenu::create([
            'package_id' => 1,
            'menu_id' => 7, // Es Teh Manis
            'quantity' => 4,
        ]);

        // Couple Package (package_id: 2)
        PackageMenu::create([
            'package_id' => 2,
            'menu_id' => 2, // Bakso Jumbo
            'quantity' => 2,
        ]);
        PackageMenu::create([
            'package_id' => 2,
            'menu_id' => 8, // Es Jeruk
            'quantity' => 2,
        ]);

        // Student Package (package_id: 3)
        PackageMenu::create([
            'package_id' => 3,
            'menu_id' => 1, // Bakso Original
            'quantity' => 1,
        ]);
        PackageMenu::create([
            'package_id' => 3,
            'menu_id' => 7, // Es Teh Manis
            'quantity' => 1,
        ]);
    }
}
