<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $galleries = [
            [
                'title' => 'Bakso Original Special',
                'photo_path' => 'gallery/bakso-1.jpg',
                'photo_type' => 'food',
                'description' => 'Our signature bakso with special broth',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Bakso Jumbo',
                'photo_path' => 'gallery/bakso-2.jpg',
                'photo_type' => 'food',
                'description' => 'Extra large meatball',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'Restaurant Front',
                'photo_path' => 'gallery/place-1.jpg',
                'photo_type' => 'place',
                'description' => 'Welcome to our restaurant',
                'order' => 3,
                'is_active' => true,
            ],
            [
                'title' => 'Cozy Dining Area',
                'photo_path' => 'gallery/place-2.jpg',
                'photo_type' => 'place',
                'description' => 'Comfortable seating area',
                'order' => 4,
                'is_active' => true,
            ],
            [
                'title' => 'Kitchen Area',
                'photo_path' => 'gallery/place-3.jpg',
                'photo_type' => 'place',
                'description' => 'Clean and hygienic kitchen',
                'order' => 5,
                'is_active' => true,
            ],
        ];

        foreach ($galleries as $gallery) {
            Gallery::create($gallery);
        }
    }
}
