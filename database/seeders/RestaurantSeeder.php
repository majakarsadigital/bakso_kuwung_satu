<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Restaurant::create([
            'name' => 'Bakso Kuwung Satu',
            'tagline' => 'Authentic Meatball Since',
            'short_story' => 'Started from a small cart in, Bakso Pak Kumis has grown to become one of the most beloved meatball restaurants in the city. We maintain the original recipe passed down through generations, ensuring every bowl delivers the same authentic taste our customers have loved for decades.',
            'advantages' => 'Handmade meatballs daily, Secret family recipe, Fresh ingredients, Affordable prices, Cozy atmosphere',
            'address' => 'Jl. Raya Merdeka No. 123, Surabaya, East Java',
            'phone' => '031-1234567',
            'whatsapp' => '6281234567890',
            'maps_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.2!2d112.7!3d-7.2!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1',
            'photo' => 'restaurant-front.jpg',
        ]);
    }
}
