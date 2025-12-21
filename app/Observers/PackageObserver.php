<?php
namespace App\Observers;

use App\Models\Menu;
use App\Models\Package;

class PackageObserver
{
    /**
     * Handle the Menu "updated" event.
     * Ketika menu diupdate, update semua package yang mengandung menu tersebut
     */
    public function menuUpdated(Menu $menu)
    {
        if ($menu->isDirty('is_available')) {
            $menu->packages()->each(function ($package) {
                $this->updatePackageStatus($package);
            });
        }
    }

    /**
     * Handle the PackageMenu "created" event.
     * Ketika menu ditambahkan ke package
     */
    public function packageMenuCreated($packageMenu)
    {
        $this->updatePackageStatus($packageMenu->package);
    }

    /**
     * Handle the PackageMenu "deleted" event.
     * Ketika menu dihapus dari package
     */
    public function packageMenuDeleted($packageMenu)
    {
        $this->updatePackageStatus($packageMenu->package);
    }

    /**
     * Update status package berdasarkan ketersediaan semua menunya
     */
    private function updatePackageStatus(Package $package)
    {
        $allMenusAvailable = $package->menus()->where('is_available', false)->doesntExist();
        
        if ($package->is_active != $allMenusAvailable) {
            $package->update(['is_active' => $allMenusAvailable]);
        }
    }
}