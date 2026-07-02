<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FranchiseController;
use App\Http\Controllers\CollectionItemController;
use App\Models\CollectionItem;
use App\Models\Category;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {

    $userId = auth()->id();

    $totalItems = CollectionItem::where('user_id', $userId)->count();

    $totalInvested = CollectionItem::where('user_id', $userId)
        ->sum('purchase_price');

    $wishlist = CollectionItem::where('user_id', $userId)
        ->where('status', 'wishlist')
        ->count();

    $categoriesCount = Category::count();

    $latestItems = CollectionItem::with('category')
        ->where('user_id', $userId)
        ->latest()
        ->take(5)
        ->get();

    // NOVO: estatísticas por categoria
    $categoryStats = Category::withCount(['items' => function ($query) use ($userId) {
        $query->where('user_id', $userId);
    }])->get();

    return view('dashboard', compact(
        'totalItems',
        'totalInvested',
        'wishlist',
        'categoriesCount',
        'latestItems',
        'categoryStats'
    ));

})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/items/favorites', [CollectionItemController::class, 'favorites'])
    ->name('items.favorites');
    Route::get('/items/wishlist', [CollectionItemController::class, 'wishlist'])
    ->name('items.wishlist');
    Route::resource('categories', CategoryController::class);
    Route::resource('franchises', FranchiseController::class);
    Route::resource('items', CollectionItemController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

require __DIR__.'/auth.php';
