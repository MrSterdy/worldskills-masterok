<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        // \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'first_name' => 'аааааа',
             'last_name' => 'брууух',
             'middle_name' => 'Васильевич',
             'name' => 'kiki',
             'email' => 'test@example.com',
             'password' => 'password'
         ]);
    }
}
