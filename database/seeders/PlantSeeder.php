<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plant;

class PlantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Plant::create([
            'name' => 'Timun',
            'latin_name' => 'Cucumis sativus',
            'image_plant' => 'storage\app\public\images\timun.jpg',
            'description' => 'Tanaman sayur merambat yang sering digunakan dalam salad.',
            'planting_guide' => 'Tanam di tempat yang banyak sinar matahari dan tanah yang subur.',
            'fertilizer_type' => 'Pupuk kompos atau kandang setiap 2 minggu.',
            'fun_fact' => 'Timun dapat membantu mengurangi kantung mata.'
        ]);

        Plant::create([
            'name' => 'Kangkung',
            'latin_name' => 'Ipomoea aquatica',
            'image_plant' => 'storage\app\public\images\kangkung.jpg', 
            'description' => 'Sayuran air yang populer dalam masakan Asia.',
            'planting_guide' => 'Tanam di tanah yang lembap dan tempat dengan sinar matahari parsial.',
            'fertilizer_type' => 'Pupuk cair atau kompos setiap bulan.',
            'fun_fact' => 'Kangkung tumbuh sangat cepat di lingkungan basah.'
        ]);
    }
}
