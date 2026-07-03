<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Franchise;
use App\Models\User;

class FranchiseSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::where('email', 'sandy@teste.com')->first();

        Franchise::firstOrCreate([
            'name' => 'Naruto',
            'user_id' => $user->id,
        ]);

        Franchise::firstOrCreate([
            'name' => 'Jujutsu Kaisen',
            'user_id' => $user->id,
        ]);

        Franchise::firstOrCreate([
            'name' => 'Monster High',
            'user_id' => $user->id,
        ]);
    }
}