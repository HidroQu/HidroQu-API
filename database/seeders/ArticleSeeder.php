<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Article::query()->create([
            'title' => '10 Tips Menanam Hidroponik untuk Pemula',
            'content' => 'Hidroponik adalah metode bercocok tanam tanpa menggunakan tanah, melainkan memanfaatkan air yang kaya akan nutrisi. Teknik ini semakin populer karena hemat lahan dan mudah dilakukan di rumah. Berikut adalah 10 tips untuk Anda yang ingin mencoba hidroponik:\n\n1. Pilih sistem hidroponik yang sesuai, seperti sistem wick atau NFT (Nutrient Film Technique) untuk pemula.\n2. Gunakan media tanam yang tepat, seperti rockwool, arang sekam, atau hidroton.\n3. Pastikan larutan nutrisi memiliki pH yang sesuai, yaitu antara 5.5 hingga 6.5.\n4. Perhatikan pencahayaan, baik dari sinar matahari langsung atau lampu grow light.\n5. Pantau kualitas air, hindari air dengan kandungan klorin tinggi.\n6. Pilih tanaman yang mudah tumbuh seperti selada, kangkung, atau bayam.\n7. Ganti larutan nutrisi secara rutin untuk mencegah penumpukan zat berbahaya.\n8. Pastikan sistem hidroponik bebas dari hama dan penyakit.\n9. Dokumentasikan pertumbuhan tanaman untuk memantau keberhasilan.\n10. Jangan ragu untuk bereksperimen dan terus belajar dari pengalaman.\n\nDengan mengikuti tips ini, Anda dapat memulai hidroponik dengan langkah yang lebih percaya diri dan berhasil memanen tanaman sehat di rumah.',
            'image' => '',
            'user_id' => 1,
        ]);

        Article::query()->create([
            'title' => 'Mengatasi Kekurangan Nutrisi pada Tanaman Hidroponik',
            'content' => 'Kekurangan nutrisi adalah masalah umum yang sering dihadapi dalam budidaya hidroponik. Tanaman yang kekurangan nutrisi dapat menunjukkan gejala seperti daun menguning, pertumbuhan terhambat, atau bahkan gagal panen. Berikut adalah panduan untuk mengidentifikasi dan mengatasi kekurangan nutrisi:\n\n1. **Nitrogen**: Daun tua menguning, batang kerdil. Solusi: Tambahkan pupuk kaya nitrogen seperti urea atau ZA.\n2. **Fosfor**: Daun keunguan, akar lemah. Solusi: Gunakan pupuk fosfat seperti SP-36.\n3. **Kalium**: Tepi daun menguning, buah tidak optimal. Solusi: Tambahkan pupuk KCl atau pupuk NPK.\n4. **Kalsium**: Daun muda keriting, pertumbuhan lambat. Solusi: Tambahkan kapur dolomit atau kalsium nitrat.\n\nLangkah-langkah tambahan meliputi pengecekan pH larutan nutrisi, yang seharusnya berada di kisaran 5.5–6.5, serta memantau kualitas air yang digunakan. Dengan perawatan yang tepat, kekurangan nutrisi dapat diatasi, sehingga tanaman kembali tumbuh sehat dan produktif.',
            'image' => '',
            'user_id' => 1,
        ]);

        Article::query()->create([
            'title' => 'Mengapa Hidroponik Lebih Ramah Lingkungan?',
            'content' => 'Hidroponik telah menjadi alternatif populer untuk bercocok tanam di tengah tantangan perubahan iklim dan keterbatasan lahan. Metode ini dianggap lebih ramah lingkungan dibandingkan dengan pertanian konvensional. Berikut alasannya:\n\n1. **Penggunaan Air yang Efisien**: Hidroponik menggunakan hingga 90% lebih sedikit air karena air dapat didaur ulang dalam sistem tertutup.\n2. **Tidak Membutuhkan Pestisida**: Karena lingkungan terkendali, risiko hama lebih rendah sehingga tidak perlu menggunakan pestisida kimia yang mencemari lingkungan.\n3. **Hemat Lahan**: Tanaman dapat ditanam secara vertikal, memungkinkan penggunaan ruang yang lebih kecil dibandingkan pertanian tradisional.\n4. **Mengurangi Erosi Tanah**: Tanpa tanah, erosi yang disebabkan oleh pertanian intensif dapat diminimalkan.\n5. **Produksi Tanaman Sepanjang Tahun**: Sistem ini tidak tergantung pada musim, sehingga hasil panen dapat konsisten tanpa menguras sumber daya alam secara berlebihan.\n\nDengan semua manfaat ini, hidroponik menjadi solusi berkelanjutan yang mendukung kebutuhan pangan global tanpa merusak lingkungan.',
            'image' => '',
            'user_id' => 1,
        ]);

        Article::query()->create([
            'title' => 'Peran Teknologi dalam Budidaya Hidroponik Modern',
            'content' => 'Kemajuan teknologi telah membawa revolusi dalam dunia pertanian, termasuk hidroponik. Saat ini, teknologi memungkinkan petani untuk meningkatkan efisiensi dan produktivitas. Berikut beberapa peran teknologi dalam hidroponik modern:\n\n1. **Automasi**: Sistem otomatis untuk pengaturan pH, suhu, dan pemberian nutrisi memastikan tanaman tumbuh optimal tanpa intervensi manual berlebihan.\n2. **Sensor IoT**: Sensor dapat memantau kondisi lingkungan secara real-time dan memberikan data langsung kepada petani melalui aplikasi.\n3. **Artificial Intelligence (AI)**: AI digunakan untuk menganalisis data pertumbuhan tanaman dan merekomendasikan solusi jika ada masalah.\n4. **Aplikasi Mobile**: Aplikasi seperti HidroQu memungkinkan petani memantau dan mengelola tanaman dengan mudah.\n5. **Sistem Vertikal**: Teknologi vertikal memungkinkan lebih banyak tanaman tumbuh di ruang yang lebih kecil, ideal untuk area urban.\n\nDengan memanfaatkan teknologi ini, hidroponik menjadi lebih efisien, hemat waktu, dan dapat diakses oleh siapa saja, dari petani profesional hingga penggemar rumah tangga.',
            'image' => '',
            'user_id' => 1,
        ]);
    }
}
