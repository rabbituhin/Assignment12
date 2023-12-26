<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\SeatController;
use App\Http\Controllers\SeatAllocationController;


Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');


Route::get('/locations', [LocationController::class, 'index'])->name('locations.index');
Route::get('/locations/create', [LocationController::class, 'create'])->name('locations.create');
Route::post('/locations', [LocationController::class, 'store'])->name('locations.store');
Route::get('/locations/{id}', [LocationController::class, 'show'])->name('locations.show');
Route::get('/locations/{id}/edit', [LocationController::class, 'edit'])->name('locations.edit');
Route::put('/locations/{id}', [LocationController::class, 'update'])->name('locations.update');
Route::delete('/locations/{id}', [LocationController::class, 'destroy'])->name('locations.destroy');

// Trips
Route::get('/trips', [TripController::class, 'index'])->name('trips.index');
Route::get('/trips/create', [TripController::class, 'create'])->name('trips.create');
Route::post('/trips', [TripController::class, 'store'])->name('trips.store');
Route::get('/trips/{id}', [TripController::class, 'show'])->name('trips.show');
Route::get('/trips/{id}/edit', [TripController::class, 'edit'])->name('trips.edit');
Route::put('/trips/{id}', [TripController::class, 'update'])->name('trips.update');
Route::delete('/trips/{id}', [TripController::class, 'destroy'])->name('trips.destroy');

// Seats
Route::get('/seats', [SeatController::class, 'index'])->name('seats.index');
Route::get('/seats/create', [SeatController::class, 'create'])->name('seats.create');
Route::post('/seats', [SeatController::class, 'store'])->name('seats.store');
Route::get('/seats/{id}', [SeatController::class, 'show'])->name('seats.show');
Route::get('/seats/{id}/edit', [SeatController::class, 'edit'])->name('seats.edit');
Route::put('/seats/{id}', [SeatController::class, 'update'])->name('seats.update');
Route::delete('/seats/{id}', [SeatController::class, 'destroy'])->name('seats.destroy');

// Seat Allocations
Route::get('/seat_allocations', [SeatAllocationController::class, 'index'])->name('seat_allocations.index');
Route::get('/seat_allocations/create', [SeatAllocationController::class, 'create'])->name('seat_allocations.create');
Route::post('/seat_allocations', [SeatAllocationController::class, 'store'])->name('seat_allocations.store');
Route::get('/seat_allocations/{id}', [SeatAllocationController::class, 'show'])->name('seat_allocations.show');
Route::get('/seat_allocations/{id}/edit', [SeatAllocationController::class, 'edit'])->name('seat_allocations.edit');
Route::put('/seat_allocations/{id}', [SeatAllocationController::class, 'update'])->name('seat_allocations.update');
Route::delete('/seat_allocations/{id}', [SeatAllocationController::class, 'destroy'])->name('seat_allocations.destroy');