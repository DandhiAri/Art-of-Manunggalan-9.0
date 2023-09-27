<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        User::create([
            "name" => "admin",
            "email" => "admin@example.com",
            "password" => Hash::make("admin1234"),
            'telp' => "08123456789",
            "confirm" => "0",
            "presence" => "0",
            "role" => "ADMIN",
        ]);


    }
}
