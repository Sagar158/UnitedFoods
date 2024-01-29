<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();
        User::create([
           'name' => 'Sagar',
           'email' => 'sagar.savitech@gmail.com',
           'password' => bcrypt(123456789)
        ]);
    }
}
