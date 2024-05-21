<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        User::factory()->create([
            'name' => 'Iqbal farhan syuhada',
            'email' => 'iqbalfarhan1996@gmail.com',
            'password' => 'adminoke'
        ]);

        $this->call([
            ChatSeeder::class,
            PesanSeeder::class,
        ]);
    }
}
