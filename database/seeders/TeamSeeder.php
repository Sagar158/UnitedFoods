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
                'mobile' => '',
                'description' => 'Saleemullah, being an individual who started his venture in the late 1970s, would likely be in his late 60s or early 70s by now. He might have a distinguished appearance, with greying hair, perhaps worn in a neat, professional style. His facial features could reflect his experience and wisdom, with gentle lines around his eyes and a thoughtful expression. He might prefer wearing glasses, adding to his scholarly demeanor.',
            ],
            [
                'prefix' => 1,
                'name' => 'Faraz',
                'designation' => 'General Manager',
                'image' => 'assets/images/team/faraz.jpg',
                'mobile' => '',
                'description' => 'Faraz, serving as the General Manager at United Foods, is a dynamic and highly respected professional in the food industry. With over a decade of experience under his belt, Faraz is known for his innovative management style and exceptional leadership skills.',
            ],
            [
                'prefix' => 1,
                'name' => 'Abdullah',
                'designation' => 'Quality Assurance Manager',
                'image' => 'assets/images/team/abdullah.jpg',
                'mobile' => '(+92)346 2215218',
                'description' => 'Abdullah serves as the Quality Assurance Manager at United Foods, a role in which he has thrived due to his meticulous attention to detail and unwavering commitment to excellence. In his mid-30s, Abdullah is known for his methodical approach and his expertise in ensuring that all products meet the highest standards of quality and safety. ',
            ],
        ];

        Teams::insert($data);
    }
}
