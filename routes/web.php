<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VehicleController;
use App\Http\Middleware\CheckRole;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $user = User::get();
    $vehicles = Vehicle::get();
    $totalVehicles = $vehicles->count();
    $totalUsers = $user->count();

    $newUsersThisWeek = User::where('created_at', '>=', now()->subWeek())->count();
    $newUsersThisMonth = User::where('created_at', '>=', now()->subMonth())->count();

    return view('dashboard', compact('vehicles', 'totalVehicles','totalUsers', 'newUsersThisWeek', 'newUsersThisMonth'));
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware(['auth', CheckRole::class . ':admin'])->group(function () {
    Route::get('/vehicles/create', [VehicleController::class, 'create'])->name('vehicle.create');
    Route::post('/vehicles', [VehicleController::class, 'store'])->name('vehicle.store');
    Route::get('/vehicles/{id}/edit', [VehicleController::class, 'edit'])->name('vehicle.edit');
    Route::put('/vehicles/{id}', [VehicleController::class, 'update'])->name('vehicle.update');
    Route::delete('/vehicles/{id}', [VehicleController::class, 'destroy'])->name('vehicle.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('vehicles',[VehicleController::class,'index'])->name('fetch_all_vehicles');
    Route::get('/vehicles/{id}', [VehicleController::class, 'show'])->name('vehicle.show');
});

require __DIR__.'/auth.php';
