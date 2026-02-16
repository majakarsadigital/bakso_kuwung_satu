<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use App\Models\Gallery;
use App\Models\Menu;
use App\Models\Package;
use App\Models\Restaurant;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $restaurant = Restaurant::first();

        $menuQuery = Menu::available()
            ->withAvg('testimonials', 'rating')
            ->withCount('testimonials')
            ->orderBy('category');

        $menus = (clone $menuQuery)->get();

        $drinkMenus = (clone $menuQuery)
            ->category('drink')
            ->get();

        $foodMenus = (clone $menuQuery)
            ->category('main')
            ->get();
        $topMainMenus = (clone $menuQuery)
            ->category('main')
            ->orderByDesc('testimonials_avg_rating')
            ->orderByDesc('testimonials_count')
            ->orderByDesc('created_at')
            ->take(4)
            ->get();

        $galleries = Gallery::where('is_active', true)
            ->orderBy('order')
            ->get();

        $testimonials = Testimonial::featured()
            ->latest('testimonial_date')
            ->take(3)
            ->get();

        $discounts = Discount::active()->get();

        $packages = Package::with('menus')->active()->get();

        return view('pages.home', compact(
            'restaurant',
            'menus',
            'drinkMenus',
            'foodMenus',
            'topMainMenus', 
            'galleries',
            'testimonials',
            'discounts',
            'packages'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
