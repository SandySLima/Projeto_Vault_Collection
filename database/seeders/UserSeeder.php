<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        //Neste user se encontram itens colecionáveis adicionados e fotos 
        User::firstOrCreate(
            ['email' => 'sandy@teste.com'],
            [
                'name' => 'Sandy',
                'password' => Hash::make('teste1234'),
            ]
        );

        User::firstOrCreate(
            ['email' => 'admin@vault.com'],
            [
                'name' => 'Administrador',
                'password' => Hash::make('12345678'),
            ]
        );

        User::firstOrCreate(
            ['email' => 'user@vault.com'],
            [
                'name' => 'Usuário',
                'password' => Hash::make('12345678'),
            ]
        );
    }
}