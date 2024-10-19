<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

         \App\Models\User::factory()->create([
             'name' => 'adminini hotel',
             'ID_User' => 'admininihotel',
             'password' => '1111',
             'email' => 'test@example.com',
             'telepon' => '081123456789'
         ]);
    }
}
