<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CollectionItem;
use App\Models\User;
use App\Models\Category;
use App\Models\Franchise;

class CollectionItemSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::where('email', 'sandy@teste.com')->first();

        $categories = Category::all()->keyBy('name');

        $franchises = Franchise::all()->keyBy('name');

        CollectionItem::create([
            'user_id' => $user->id,
            'category_id' => $categories['Figure']->id ?? null,
            'franchise_id' => $franchises['Monster High']->id ?? null,
            'name' => 'Draculaura G3',
            'manufacturer' => 'Mattel',
            'series' => null,
            'character' => 'Draculaura',
            'edition' => 'Core Refresh',
            'quantity' => 1,
            'purchase_date' => '2026-06-20',
            'purchase_price' => 200.00,
            'estimated_price' => null,
            'condition' => 'Mint',
            'storage_location' => null,
            'photo' => null,
            'image' => 'items/FNHho7RRWNiyMBHnQwwDbFynumsBmjuvlyBWB05q.webp',
            'notes' => 'A compra foi feita no site oficial da Amazon.',
            'is_favorite' => true,
            'status' => 'owned',
        ]);

        CollectionItem::create([
            'user_id' => $user->id,
            'category_id' => $categories['Figure']->id ?? null,
            'franchise_id' => $franchises['Naruto']->id ?? null,
            'name' => 'Naruto Shuriken',
            'manufacturer' => 'Candide',
            'series' => null,
            'character' => 'Naruto Uzumaki',
            'edition' => 'Naruto',
            'quantity' => 1,
            'purchase_date' => '2026-05-01',
            'purchase_price' => 112.00,
            'estimated_price' => null,
            'condition' => 'Mint',
            'storage_location' => 'Prateleira',
            'photo' => null,
            'image' => 'items/eYb57HBhJ3Hp3N0odJZL6ZAzqE2veb3wPrfOXfxC.webp',
            'notes' => 'Comprado no mercado livre.',
            'is_favorite' => false,
            'status' => 'owned',
        ]);

        CollectionItem::create([
            'user_id' => $user->id,
            'category_id' => $categories['Figure']->id ?? null,
            'franchise_id' => $franchises['Naruto']->id ?? null,
            'name' => 'Sasuke #1965',
            'manufacturer' => 'Funko',
            'series' => 'FU80343',
            'character' => 'Sasuke Uchiha',
            'edition' => 'Pop! Vinyl Naruto',
            'quantity' => 1,
            'purchase_date' => null,
            'purchase_price' => null,
            'estimated_price' => 134.99,
            'condition' => 'Mint',
            'storage_location' => null,
            'photo' => null,
            'image' => 'items/H8w3TA9xaL94mhgRANlSeO5vvm1qmqGAFDwBfYnN.webp',
            'notes' => 'Preço estimado no mercado livre.',
            'is_favorite' => false,
            'status' => 'wishlist',
        ]);

        CollectionItem::create([
            'user_id' => $user->id,
            'category_id' => $categories['Manga']->id ?? $categories['Mangá']->id ?? null,
            'franchise_id' => $franchises['Jujutsu Kaisen']->id ?? null,
            'name' => 'Jujutsu Kaisen Vol. 4 - Gege Akutami',
            'manufacturer' => 'Panini',
            'series' => 'AMJUK004R5',
            'character' => 'Gojo na capa',
            'edition' => 'Jujutsu Kaisen vol. 4',
            'quantity' => 1,
            'purchase_date' => null,
            'purchase_price' => null,
            'estimated_price' => null,
            'condition' => 'Near Mint',
            'storage_location' => null,
            'photo' => null,
            'image' => 'items/z0eutZ0uAlfBgBfoPFFh6OTp8GYWEM0OSdkPRI5U.webp',
            'notes' => null,
            'is_favorite' => true,
            'status' => 'wishlist',
        ]);
    }
}
