<?php

namespace Database\Seeders;

use App\Models\AboutUs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'our_mission' => "At United Foods, our mission is to provide high-quality, sustainable, and nutritious palm dates, mango, and rice to the global market. Founded in 1994, we are committed to innovative agricultural practices that respect the environment and support local communities. We strive to maintain the highest standards in every aspect of our production process, ensuring that our products not only meet but exceed our customers' expectations in taste, quality, and sustainability.",
            'our_vission' => "United Foods envisions a world where wholesome, natural, and delicious food is accessible to everyone. Under the visionary leadership of our founder, Mr. Saleemullah, we aim to be at the forefront of the agricultural industry, revolutionizing the way palm dates, mango, and rice are produced and consumed. Our vision extends beyond just business growth; it encompasses fostering strong community ties, promoting environmental stewardship, and leading by example in ethical and responsible business practices. We are dedicated to making a positive impact on the planet and in the lives of people around the globe through our dedication to excellence in every kernel and fruit we produce."
        ];

        AboutUs::truncate();
        AboutUs::create($data);
    }
}
