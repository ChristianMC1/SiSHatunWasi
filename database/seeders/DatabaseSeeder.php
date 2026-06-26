<?php

namespace Database\Seeders;

use App\Models\Assistance;
use App\Models\Cliente;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Christian Mamani Condori',
            'email' => 'christianmamani587@gmail.com',
            'password' => bcrypt("12345678"),
        ]);

        Product::factory(3000)->create();

        Cliente::factory(500)->create();
        Assistance::factory(500)->create();
    }
}
