<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use App\Models\Gallery;
use App\Models\Menu;
use App\Models\Package;
use App\Models\Restaurant;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $restaurant = Restaurant::first();

        $search = trim($request->query('search'));

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

        $galleries = Gallery::where('is_active', true)
            ->orderBy('order')
            ->get();

        $testimonials = Testimonial::featured()
            ->latest('testimonial_date')
            ->take(3)
            ->get();

        $discounts = Discount::active()->get();

        $packages = Package::with('menus')->active()->get();

        return view('pages.menu', compact(
            'restaurant',
            'menus',
            'drinkMenus',
            'foodMenus',
            'galleries',
            'testimonials',
            'discounts',
            'packages',
            'search'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menuQuery = Menu::available()
            ->withAvg('testimonials', 'rating')
            ->withCount('testimonials')
            ->orderBy('category');

        $drinkMenus = Menu::category('drink')->get();
        $foodMenus = (clone $menuQuery)
            ->category('main')
            ->get();
                 $drinkMenus = (clone $menuQuery)
            ->category('drink')
            ->get();

        // $foodMenus = Menu::get();
        $categories = ['main', 'drink'];

        return view('admin.pages.menu.menu_create', compact(
            'drinkMenus',
            'foodMenus',
            // 'categories'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'short_description' => 'nullable|string|max:255',
            'category' => 'required|string|in:main,drink',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'is_available' => 'required|boolean',
        ]);

        if ($request->hasFile('photo')) {
            $validated['photo'] = $request->file('photo')->store('menus', 'public');
        }

        $validated['is_available'] = (bool) $validated['is_available'];

        Menu::create($validated);

        return redirect()
            ->back()
            ->with('success', 'Menu berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $menu = Menu::findOrFail($id);

        return view('pages.menu_show', compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $menu = Menu::findOrFail($id);

        return view('admin.pages.menu.menu_create', compact(
            'menu',
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $menu = Menu::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'short_description' => 'nullable|string|max:255',
            'category' => 'required|string|max:100',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'is_available' => 'required|boolean',
        ]);

        // Handle photo upload
        if ($request->hasFile('photo')) {
            // Delete old photo if exists
            if ($menu->photo && Storage::disk('public')->exists($menu->photo)) {
                Storage::disk('public')->delete($menu->photo);
            }

            // Store new photo
            $validated['photo'] = $request->file('photo')
                ->store('menus', 'public');
        }

        $menu->update($validated);

        return redirect()
            ->back()
            ->with('success', 'Menu berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $menu = Menu::findOrFail($id);

        if ($menu->photo && Storage::disk('public')->exists($menu->photo)) {
            Storage::disk('public')->delete($menu->photo);
        }

        $menu->delete();

        return redirect()
            ->back()
            ->with('success', 'Menu berhasil dihapus');
    }
}
