<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use App\Models\Gallery;
use App\Models\Menu;
use App\Models\Package;
use App\Models\Restaurant;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $restaurant = Restaurant::first();
        $menus = Menu::where('is_available', true)
            ->orderBy('category')
            ->get();
        $galleries = Gallery::where('is_active', true)
            ->orderBy('order')
            ->get();
        $testimonials = Testimonial::where('is_featured', true)
            ->latest('testimonial_date')
            ->take(3)
            ->get();
        $discounts = Discount::active()->get();
        $packages = Package::with('menus')->active()->get();
        // dd($menus);

        return view('pages.menu', compact(
            'restaurant',
            'menus',
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
