<?php

namespace Database\Seeders;

use App\Models\Discount;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Discount::create([
            'promo_title' => 'Weekend Special 20% OFF',
            'promo_description' => 'Get 20% discount for all menu items every Saturday and Sunday. Valid for dine-in only.',
            'normal_price' => 20000,
            'discount_price' => 16000,
            'discount_percentage' => 20,
            'promo_photo' => 'promo-weekend.jpg',
            'start_date' => Carbon::now()->startOfMonth(),
            'end_date' => Carbon::now()->endOfMonth(),
            'is_active' => true,
        ]);

        Discount::create([
            'promo_title' => 'Buy 2 Get 1 Free',
            'promo_description' => 'Buy 2 bowls of bakso jumbo and get 1 free! Limited time offer.',
            'normal_price' => 60000,
            'discount_price' => 40000,
            'discount_percentage' => 33,
            'promo_photo' => 'promo-buy2get1.jpg',
            'start_date' => Carbon::now(),
            'end_date' => Carbon::now()->addDays(30),
            'is_active' => true,
        ]);
    }
}
