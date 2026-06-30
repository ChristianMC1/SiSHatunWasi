<?php

namespace Database\Seeders;
use App\Models\Client;
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
            'plain_password' => '12345678',
        ]);

        $this->call(ProductRealSeeder::class);

        Client::factory(500)->create();
    }
}
