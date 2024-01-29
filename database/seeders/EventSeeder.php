<?php

namespace Database\Seeders;

use App\Models\EventImages;
use App\Models\Events;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Events::truncate();
        EventImages::truncate();
        Events::factory()->count(100)->create();
        EventImages::factory()->count(200)->create();
    }
}
