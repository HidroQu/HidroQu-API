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
            'indication' => 'Daun berwarna hijau segar tanpa noda, struktur tanaman kokoh, bunga dan buah tumbuh normal, serta pertumbuhan keseluruhan terlihat harmonis.',
            'cause' => 'Lingkungan tumbuh yang ideal, asupan nutrisi mencukupi, penyiraman yang tepat, dan bebas dari serangan hama atau penyakit.',
            'solution' => 'Lanjutkan perawatan yang konsisten, pantau kondisi tanaman secara rutin, dan pastikan pH tanah tetap seimbang antara 5,5 hingga 7.',
        ]);

        Diagnostic::query()->insert([
            'disease_name' => 'Kekurangan Kalium',
            'disease_label' => 'Kalium_Deficiency',
            'image_disease' => json_encode([
                'https://storage.googleapis.com/hidroqu/diagnostics/kalium-1.jpg',
                'https://storage.googleapis.com/hidroqu/diagnostics/kalium-2.jpg',
                'https://storage.googleapis.com/hidroqu/diagnostics/kalium-3.png',
            ]),
            'indication' => 'Daun tua menguning di bagian tepi atau ujung, muncul bercak coklat, dan batang tanaman lemah serta mudah patah.',
            'cause' => 'Kekurangan kalium di tanah akibat pencucian oleh air hujan berlebihan atau kurangnya pupuk kalium dalam perawatan.',
            'solution' => 'Berikan pupuk kaya kalium seperti KCl (Kalium Klorida) atau pupuk NPK dengan kandungan kalium tinggi. Aplikasikan secara teratur sesuai dosis anjuran.',
        ]);

        Diagnostic::query()->insert([
            'disease_name' => 'Kekurangan Nitrogen',
            'disease_label' => 'Nitrogen_Deficiency',
            'image_disease' => json_encode([
                'https://storage.googleapis.com/hidroqu/diagnostics/nitrogen-1.jpg',
                'https://storage.googleapis.com/hidroqu/diagnostics/nitrogen-2.jpg',
                'https://storage.googleapis.com/hidroqu/diagnostics/nitrogen-3.jpg',
            ]),
            'indication' => 'Daun bawah atau daun tua menguning secara keseluruhan, pertumbuhan tanaman lambat, dan batang terlihat lebih kurus dari biasanya.',
            'cause' => 'Nitrogen tidak mencukupi di tanah akibat pencucian, pemupukan yang tidak memadai, atau pengelolaan tanah yang buruk.',
            'solution' => 'Tambahkan pupuk nitrogen seperti urea, ZA (Amonium Sulfat), atau pupuk organik seperti pupuk hijau. Pastikan aplikasi dilakukan sesuai dengan fase pertumbuhan tanaman.',
        ]);

        Diagnostic::query()->insert([
            'disease_name' => 'Kekurangan Fosfor',
            'disease_label' => 'Phosphorus_Deficiency',
            'image_disease' => json_encode([
                'https://storage.googleapis.com/hidroqu/diagnostics/fosfor-1.png',
                'https://storage.googleapis.com/hidroqu/diagnostics/fosfor-2.png',
                'https://storage.googleapis.com/hidroqu/diagnostics/fosfor-3.jpg',
            ]),
            'indication' => 'Daun terlihat kusam dengan warna kekuningan keunguan, akar tanaman kecil atau kurang berkembang, dan pertumbuhan secara keseluruhan sangat lambat.',
            'cause' => 'Kekurangan fosfor disebabkan oleh tingkat fosfor rendah dalam tanah atau keasaman tanah yang terlalu tinggi, yang menghambat penyerapan fosfor oleh tanaman.',
            'solution' => 'Gunakan pupuk fosfor seperti TSP (Triple Superphosphate), SP-36, atau pupuk organik yang kaya fosfor. Periksa pH tanah dan tambahkan kapur dolomit jika tanah terlalu asam.',
        ]);
    }
}
