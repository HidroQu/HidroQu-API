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
        Diagnostic::create([
            'disease_name' => 'Blight pada Timun',
            'image_disease' => '',
            'indication' => 'Daun berubah kuning dan bintik-bintik coklat.',
            'cause' => 'Jamur yang berkembang di kelembapan tinggi.',
            'solution' => 'Potong daun yang terinfeksi dan kurangi penyiraman.',
        ]);

        Diagnostic::create([
            'disease_name' => 'Busuk Akar pada Kangkung',
            'image_disease' => '',
            'indication' => 'Tanaman layu dan akar menjadi hitam dan lembek.',
            'cause' => 'Disebabkan oleh kelembapan tanah yang berlebihan.',
            'solution' => 'Kurangi penyiraman dan pastikan drainase yang baik.',
        ]);
    }
}
