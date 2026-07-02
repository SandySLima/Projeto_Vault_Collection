<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            Category::insert([
        ['name' => 'Mangá', 'slug' => 'manga', 'description' => null],
        ['name' => 'HQ', 'slug' => 'hq', 'description' => null],
        ['name' => 'Figure', 'slug' => 'figure', 'description' => null],
        ['name' => 'Funko Pop', 'slug' => 'funko-pop', 'description' => null],
        ['name' => 'Boneca colecionável', 'slug' => 'boneca-colecionavel', 'description' => null],
        ['name' => 'Blu-ray', 'slug' => 'blu-ray', 'description' => null],
        ['name' => 'DVD', 'slug' => 'dvd', 'description' => null],
        ['name' => 'Steelbook', 'slug' => 'steelbook', 'description' => null],
        ['name' => 'Livro', 'slug' => 'livro', 'description' => null],
        ['name' => 'Artbook', 'slug' => 'artbook', 'description' => null],
        ['name' => 'Card', 'slug' => 'card', 'description' => null],
        ['name' => 'Jogo', 'slug' => 'jogo', 'description' => null],
        ['name' => 'Miniatura', 'slug' => 'miniatura', 'description' => null],
        ['name' => 'Outros', 'slug' => 'outros', 'description' => null],
        ]);
    }
}
