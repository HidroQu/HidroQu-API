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
        Plant::query()->create([
            'name' => 'Timun',
            'latin_name' => 'Cucumis sativus',
            'icon_plant' => 'https://storage.googleapis.com/hidroqu/plants/icons/timun.svg',
            'description' => 'Timun adalah tanaman sayur merambat yang memiliki kandungan air tinggi dan sering digunakan dalam berbagai hidangan seperti salad atau acar.',
            'planting_guide' => 'Tanam timun di area yang mendapatkan sinar matahari penuh dengan tanah yang subur dan memiliki drainase baik. Pastikan tanaman memiliki penopang seperti rambatan.',
            'fertilizer_type' => 'Gunakan pupuk organik seperti kompos atau pupuk kandang setiap 10–14 hari untuk mendukung pertumbuhan buah.',
            'fun_fact' => 'Timun dikenal sebagai bahan alami untuk menghidrasi kulit dan sering digunakan dalam produk kecantikan.',
            'duration_plant' => 45,
        ]);

        Plant::query()->create([
            'name' => 'Kangkung',
            'latin_name' => 'Ipomoea aquatica',
            'icon_plant' => 'https://storage.googleapis.com/hidroqu/plants/icons/kangkung.svg',
            'description' => 'Kangkung adalah sayuran air yang sangat populer di Asia Tenggara, dikenal karena tekstur renyah dan rasa segarnya.',
            'planting_guide' => 'Tanam kangkung di tanah yang lembap atau wadah berair. Tempatkan di area dengan sinar matahari parsial untuk hasil terbaik.',
            'fertilizer_type' => 'Berikan pupuk cair organik atau kompos setiap 2–3 minggu untuk mendukung pertumbuhan cepatnya.',
            'fun_fact' => 'Kangkung sering dijuluki “morning glory” karena bunganya yang mekar di pagi hari.',
            'duration_plant' => 21,
        ]);

        Plant::query()->create([
            'name' => 'Selada',
            'latin_name' => 'Lactuca sativa',
            'icon_plant' => 'https://storage.googleapis.com/hidroqu/plants/icons/selada.svg',
            'description' => 'Selada adalah tanaman daun yang segar, rendah kalori, dan kaya akan serat. Cocok untuk salad atau hidangan sandwich.',
            'planting_guide' => 'Tanam selada di tanah gembur dengan kelembapan cukup. Tempatkan di area dengan sinar matahari parsial untuk menjaga daun tetap segar.',
            'fertilizer_type' => 'Tambahkan pupuk cair atau kompos setiap 10–14 hari untuk menjaga pertumbuhan optimal.',
            'fun_fact' => 'Selada adalah salah satu sayuran pertama yang ditanam di luar angkasa oleh NASA.',
            'duration_plant' => 30,
        ]);

        Plant::query()->create([
            'name' => 'Tomat',
            'latin_name' => 'Solanum lycopersicum',
            'icon_plant' => 'https://storage.googleapis.com/hidroqu/plants/icons/tomat.svg',
            'description' => 'Tomat adalah tanaman buah serbaguna yang kaya vitamin C dan antioksidan, sering digunakan dalam saus, sup, atau dimakan segar.',
            'planting_guide' => 'Tanam tomat di tanah gembur dengan pH netral. Pastikan mendapat sinar matahari langsung setidaknya 6 jam sehari dan gunakan penopang.',
            'fertilizer_type' => 'Gunakan pupuk organik atau NPK dengan kandungan kalium tinggi setiap 2 minggu untuk mendukung produksi buah.',
            'fun_fact' => 'Tomat secara teknis adalah buah, tetapi sering dianggap sayuran dalam kuliner.',
            'duration_plant' => 60,
        ]);

        Plant::query()->create([
            'name' => 'Bayam',
            'latin_name' => 'Spinacia oleracea',
            'icon_plant' => 'https://storage.googleapis.com/hidroqu/plants/icons/bayam.svg',
            'description' => 'Bayam adalah sayuran hijau yang kaya nutrisi, termasuk zat besi, vitamin K, dan antioksidan, menjadikannya pilihan populer untuk makanan sehat.',
            'planting_guide' => 'Tanam bayam di tanah subur dengan kelembapan tinggi. Tempatkan di lokasi yang menerima sinar matahari penuh atau sedikit teduh.',
            'fertilizer_type' => 'Berikan pupuk organik seperti kompos atau pupuk kandang setiap 2–3 minggu untuk mendukung pertumbuhan daunnya.',
            'fun_fact' => 'Bayam menjadi terkenal di seluruh dunia setelah muncul dalam kartun Popeye sebagai sumber kekuatan.',
            'duration_plant' => 40,
        ]);
    }
}
