<?php

namespace Database\Seeders;

use App\Models\Plant;
use Illuminate\Database\Seeder;

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
            'fun_fact' => 'Timun dapat membantu mengurangi kantung mata.',
        ]);

        Plant::create([
            'name' => 'Kangkung',
            'latin_name' => 'Ipomoea aquatica',
            'image_plant' => 'storage\app\public\images\kangkung.jpg',
            'description' => 'Sayuran air yang populer dalam masakan Asia.',
            'planting_guide' => 'Tanam di tanah yang lembap dan tempat dengan sinar matahari parsial.',
            'fertilizer_type' => 'Pupuk cair atau kompos setiap bulan.',
            'fun_fact' => 'Kangkung tumbuh sangat cepat di lingkungan basah.',
        ]);

        Plant::create([
            'name' => 'Selada',
            'latin_name' => 'Lactuca sativa',
            'image_plant' => 'storage\app\public\images\selada.jpg',
            'description' => 'Sayuran daun yang biasa digunakan dalam salad segar.',
            'planting_guide' => 'Tanam di tanah yang gembur dan tempat dengan sinar matahari parsial.',
            'fertilizer_type' => 'Pupuk kompos atau pupuk cair setiap 2 minggu.',
            'fun_fact' => 'Selada dapat membantu meningkatkan pencernaan dan menjaga hidrasi tubuh.',
        ]);

        Plant::create([
            'name' => 'Tomat',
            'latin_name' => 'Solanum lycopersicum',
            'image_plant' => 'storage\app\public\images\tomat.jpg',
            'description' => 'Tanaman buah yang sering digunakan dalam berbagai masakan.',
            'planting_guide' => 'Tanam di tanah yang gembur dan beri sinar matahari langsung setiap hari.',
            'fertilizer_type' => 'Pupuk kompos atau pupuk organik setiap 2 minggu.',
            'fun_fact' => 'Tomat mengandung lycopene, yang baik untuk kesehatan jantung.',
        ]);

        Plant::create([
            'name' => 'Bayam',
            'latin_name' => 'Spinacia oleracea',
            'image_plant' => 'storage\app\public\images\bayam.jpg',
            'description' => 'Sayuran hijau yang kaya akan zat besi dan vitamin.',
            'planting_guide' => 'Tanam di tanah yang subur dan tempat dengan sinar matahari penuh.',
            'fertilizer_type' => 'Pupuk kompos atau pupuk kandang setiap 3 minggu.',
            'fun_fact' => 'Bayam dapat membantu menjaga kesehatan tulang dan mencegah anemia.',
        ]);

    }
}
