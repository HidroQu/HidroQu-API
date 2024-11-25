<?php

namespace Database\Seeders;

use App\Models\Diagnostic;
use Illuminate\Database\Seeder;

class DiagnosticSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Diagnostic::query()->insert([
            'disease_name' => 'Tanaman Sehat',
            'disease_label' => 'Healthy',
            'image_disease' => json_encode([
                'https://storage.googleapis.com/hidroqu/diagnostics/sehat-1.png',
                'https://storage.googleapis.com/hidroqu/diagnostics/sehat-2.png',
                'https://storage.googleapis.com/hidroqu/diagnostics/sehat-3.jpg',
            ]),
            'indication' => 'Daun hijau merata, pertumbuhan tanaman optimal, dan tidak ada tanda-tanda kerusakan atau penyakit.',
            'cause' => 'Kondisi lingkungan, nutrisi, dan perawatan yang memadai.',
            'solution' => 'Pertahankan pola perawatan saat ini, pastikan penyiraman dan pemupukan dilakukan secara rutin.',
        ]);

        Diagnostic::query()->insert([
            'disease_name' => 'Kekurangan Kalium',
            'disease_label' => 'Kalium_Deficiency',
            'image_disease' => json_encode([
                'https://storage.googleapis.com/hidroqu/diagnostics/kalium-1.jpg',
                'https://storage.googleapis.com/hidroqu/diagnostics/kalium-2.jpg',
                'https://storage.googleapis.com/hidroqu/diagnostics/kalium-3.png',
            ]),
            'indication' => 'Daun menguning di tepinya, pertumbuhan buah kurang optimal, dan batang terlihat lemah.',
            'cause' => 'Kurangnya kadar kalium dalam tanah atau kurangnya pemupukan kalium.',
            'solution' => 'Gunakan pupuk kaya kalium seperti KCl atau pupuk kompos yang mengandung kalium.',
        ]);

        Diagnostic::query()->insert([
            'disease_name' => 'Kekurangan Nitrogen',
            'disease_label' => 'Nitrogen_Deficiency',
            'image_disease' => json_encode([
                'https://storage.googleapis.com/hidroqu/diagnostics/nitrogen-1.jpg',
                'https://storage.googleapis.com/hidroqu/diagnostics/nitrogen-2.jpg',
                'https://storage.googleapis.com/hidroqu/diagnostics/nitrogen-3.jpg',
            ]),
            'indication' => 'Daun tua menguning, pertumbuhan tanaman terhambat, dan batang terlihat kerdil.',
            'cause' => 'Kekurangan nitrogen dalam tanah akibat pencucian atau pemupukan yang tidak cukup.',
            'solution' => 'Tambahkan pupuk nitrogen seperti urea atau pupuk hijau secara berkala.',
        ]);

        Diagnostic::query()->insert([
            'disease_name' => 'Kekurangan Fosfor',
            'disease_label' => 'Phosphorus_Deficiency',
            'image_disease' => json_encode([
                'https://storage.googleapis.com/hidroqu/diagnostics/fosfor-1.png',
                'https://storage.googleapis.com/hidroqu/diagnostics/fosfor-2.png',
                'https://storage.googleapis.com/hidroqu/diagnostics/fosfor-3.jpg',
            ]),
            'indication' => 'Daun menguning keunguan, sistem perakaran lemah, dan pertumbuhan tanaman lambat.',
            'cause' => 'Rendahnya kadar fosfor dalam tanah atau tanah yang terlalu asam.',
            'solution' => 'Gunakan pupuk fosfat seperti TSP (Triple Superphosphate) atau tambahkan kapur untuk menetralkan keasaman tanah.',
        ]);
    }
}
