<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                'customer_name' => 'Budi Santoso',
                'rating' => 5,
                'review' => 'The best bakso in town! The broth is so flavorful and the meatballs are always fresh. Been coming here for years!',
                'customer_photo' => 'customer-1.jpg',
                'is_featured' => true,
                'testimonial_date' => Carbon::now()->subDays(5),
            ],
            [
                'customer_name' => 'Siti Aminah',
                'rating' => 5,
                'review' => 'Affordable prices with amazing taste. The family package is perfect for Sunday lunch with kids!',
                'customer_photo' => 'customer-2.jpg',
                'is_featured' => true,
                'testimonial_date' => Carbon::now()->subDays(10),
            ],
            [
                'customer_name' => 'Ahmad Rizki',
                'rating' => 5,
                'review' => 'Love the bakso jumbo! So filling and delicious. The place is also very clean and comfortable.',
                'customer_photo' => 'customer-3.jpg',
                'is_featured' => true,
                'testimonial_date' => Carbon::now()->subDays(15),
            ],
            [
                'customer_name' => 'Dewi Lestari',
                'rating' => 5,
                'review' => 'Highly recommended! The staff is friendly and the service is fast. Will definitely come back!',
                'customer_photo' => 'customer-4.jpg',
                'is_featured' => false,
                'testimonial_date' => Carbon::now()->subDays(20),
            ],
            [
                'customer_name' => 'Andi Wijaya',
                'rating' => 5,
                'review' => 'Authentic taste that reminds me of my childhood. The secret broth recipe is truly special!',
                'customer_photo' => 'customer-5.jpg',
                'is_featured' => false,
                'testimonial_date' => Carbon::now()->subDays(25),
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}
