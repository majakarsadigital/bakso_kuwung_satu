<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $menus = [
            [
                'name' => 'Bakso Original',
                'price' => 15000,
                'short_description' => 'Classic meatball soup with noodles, vegetables, and secret broth',
                'photo' => 'bakso-original.jpg',
                'category' => 'main',
                'is_available' => true,
            ],
            [
                'name' => 'Bakso Jumbo',
                'price' => 20000,
                'short_description' => 'Extra large meatball with premium ingredients',
                'photo' => 'bakso-jumbo.jpg',
                'category' => 'main',
                'is_available' => true,
            ],
            [
                'name' => 'Bakso Urat',
                'price' => 18000,
                'short_description' => 'Meatball with beef tendon for extra chewy texture',
                'photo' => 'bakso-urat.jpg',
                'category' => 'main',
                'is_available' => true,
            ],
            [
                'name' => 'Bakso Beranak',
                'price' => 22000,
                'short_description' => 'Large meatball stuffed with smaller meatballs inside',
                'photo' => 'bakso-beranak.jpg',
                'category' => 'main',
                'is_available' => true,
            ],
            [
                'name' => 'Mie Ayam Bakso',
                'price' => 16000,
                'short_description' => 'Chicken noodles combined with meatballs',
                'photo' => 'mie-ayam-bakso.jpg',
                'category' => 'main',
                'is_available' => true,
            ],
            [
                'name' => 'Bakso Tahu',
                'price' => 17000,
                'short_description' => 'Meatballs with fried tofu stuffed with meat',
                'photo' => 'bakso-tahu.jpg',
                'category' => 'main',
                'is_available' => true,
            ],
            [
                'name' => 'Es Teh Manis',
                'price' => 5000,
                'short_description' => 'Sweet iced tea',
                'photo' => 'es-teh.jpg',
                'category' => 'drink',
                'is_available' => true,
            ],
            [
                'name' => 'Es Jeruk',
                'price' => 6000,
                'short_description' => 'Fresh orange juice',
                'photo' => 'es-jeruk.jpg',
                'category' => 'drink',
                'is_available' => true,
            ],
        ];

        foreach ($menus as $menu) {
            Menu::create($menu);
        }
    }
}
