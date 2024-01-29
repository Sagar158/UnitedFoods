<?php

namespace Database\Seeders;

use App\Models\Teams;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Teams::truncate();

        $data = [
            [
                'prefix' => 1,
                'name' => 'Saleemullah',
                'designation' => 'CEO',
                'image' => 'assets/images/team/saleemullah.jpg',
            ],
            [
                'prefix' => 1,
                'name' => 'Faraz',
                'designation' => 'General Manager',
                'image' => 'assets/images/team/faraz.jpg',
            ],
            [
                'prefix' => 1,
                'name' => 'Abdullah',
                'designation' => 'Quality Assurance Manager',
                'image' => 'assets/images/team/abdullah.jpg',
            ],
        ];

        Teams::insert($data);
    }
}
