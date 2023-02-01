<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

         \App\Models\User::factory()->create([
             'name' => "admin",
             'email' => "seiho@mentorgarden.org",
             'email_verified_at' => now(),
             'password' => '$2y$10$QDNfOtTidJMG6XJB.FFaBOpG2G0CCgEU0fE6Xpap.tCHC2OPEccuK',
             'remember_token' => Str::random(10),
         ]);



    }
}
