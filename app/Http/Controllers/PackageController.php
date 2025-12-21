<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class PackageController extends Controller
{
    /**
     * Display a listing of the packages.
     */
    public function index()
    {
        $packages = Package::with(['menus'])->latest()->paginate(10);

        foreach ($packages as $package) {
            $hasUnavailableMenu = $package->menus->contains('is_available', false);

            if ($hasUnavailableMenu && $package->is_active) {
                $package->update(['is_active' => false]);
            } elseif (! $hasUnavailableMenu && ! $package->is_active) {
                $package->update(['is_active' => true]);
            }
        }

        $packages = Package::with(['menus'])->latest()->paginate(10);

        $menus = Menu::available()->get();

        return view('admin.pages.package.index', compact('packages', 'menus'));
    }

    /**
     * Show the form for creating a new package.
     */
    public function create()
    {
        $menus = Menu::available()->get();

        return view('admin.pages.package.index', compact('menus'));
    }

    /**
     * Store a newly created package in storage.
     */
    public function store(Request $request)
    {
        Log::info('PACKAGE STORE HIT', [
            'payload' => $request->all(),
        ]);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'price' => 'required|numeric|min:0',
            'is_active' => 'required|boolean',
            'menus' => 'required|array|min:1',
            'menus.*' => 'exists:menus,id',
            'quantities' => 'required|array',
            'quantities.*' => 'integer|min:1|max:1000',
        ]);

        Log::info('PACKAGE VALIDATION PASSED', [
            'validated' => $validated,
        ]);

        if ($request->hasFile('photo')) {
            $validated['photo'] = $request->file('photo')
                ->store('packages', 'public');
        }

        $package = Package::create([
            'name' => $validated['name'],
            'description' => $validated['description'] ?? null,
            'price' => $validated['price'],
            'photo' => $validated['photo'] ?? null,
            'is_active' => $validated['is_active'],
        ]);

        Log::info('PACKAGE CREATED', [
            'package_id' => $package->id,
        ]);
        foreach ($validated['menus'] as $menuId) {
            $package->menus()->attach($menuId, [
                'quantity' => $validated['quantities'][$menuId],
            ]);
        }

        Log::info('PACKAGE MENUS ATTACHED');

        return redirect()->back()->with('success', 'Package berhasil ditambahkan');
    }

    /**
     * Display the specified package.
     */
    public function show(Package $package)
    {
        $package->load(['menus']);

        return view('packages.show', compact('package'));
    }

    /**
     * Show the form for editing the specified package.
     */
    public function edit(Package $package)
    {
        $package->load(['menus']);
        $menus = Menu::available()->get();

        return view('packages.edit', compact('package', 'menus'));
    }

    /**
     * Update the specified package in storage.
     */
    public function update(Request $request, Package $package)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_active' => 'boolean',
            'menus' => 'required|array|min:1',
            'menus.*.menu_id' => 'required|exists:menus,id',
            'menus.*.quantity' => 'required|integer|min:1',
        ]);

        if ($request->hasFile('photo')) {
            $oldPhoto = $package->photo;
            $photoPath = $request->file('photo')->store('packages', 'public');
            $validated['photo'] = $photoPath;

            if ($oldPhoto && Storage::disk('public')->exists($oldPhoto)) {
                Storage::disk('public')->delete($oldPhoto);
            }
        }

        $package->update([
            'name' => $validated['name'],
            'description' => $validated['description'] ?? null,
            'price' => $validated['price'],
            'photo' => $validated['photo'] ?? $package->photo,
            'is_active' => $request->has('is_active'),
        ]);

        $syncData = collect($validated['menus'])->mapWithKeys(function ($menu) {
            return [$menu['menu_id'] => ['quantity' => $menu['quantity']]];
        })->toArray();

        $package->menus()->sync($syncData);

        return redirect()
            ->back()
            ->with('success', 'Package updated successfully.');
    }

    /**
     * Remove the specified package from storage.
     */
    public function destroy(string $id)
    {
        $package = Package::findOrFail($id);

        if ($package->photo && Storage::disk('public')->exists($package->photo)) {
            Storage::disk('public')->delete($package->photo);
        }

        $package->delete();

        return redirect()
            ->back()
            ->with('success', 'Menu berhasil dihapus');
    }

    /**
     * Toggle package active status.
     */
    public function toggleActive(Package $package)
    {
        try {
            $package->update([
                'is_active' => ! $package->is_active,
            ]);

            return back()
                ->with('success', 'Package status updated successfully.');

        } catch (\Exception $e) {
            return back()
                ->with('error', 'Failed to update package status: '.$e->getMessage());
        }
    }

    /**
     * Get active packages (for API or AJAX requests).
     */
    public function getActivePackages()
    {
        $packages = Package::active()
            ->with(['menus'])
            ->get();

        return response()->json([
            'success' => true,
            'data' => $packages,
        ]);
    }
}
