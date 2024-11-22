<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Comment;
use App\Models\Community;
use App\Models\DiagnosticHistory;
use App\Models\User;
use App\Models\UserPlant;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PlantSeeder::class,
            DiagnosticSeeder::class,
        ]);

        $user = User::factory()->create([
            'name' => 'HidroQu',
            'email' => 'hidroqu@gmail.com',
            'password' => 'password',
        ]);

        UserPlant::query()->insert([
            'user_id' => $user->id,
            'plant_id' => 1,
            'planting_date' => now()->subDays(5),
            'notes' => 'ganti pupuk 1x seminggu',
        ]);

        UserPlant::query()->insert([
            'user_id' => $user->id,
            'plant_id' => 3,
            'planting_date' => now()->subDays(10),
            'notes' => 'ganti pupuk 1x seminggu',
        ]);

        DiagnosticHistory::query()->insert([
            'user_plant_id' => 1,
            'diagnostic_id' => 1,
            'diagnosis_date' => now()->subDays(4),
        ]);

        DiagnosticHistory::query()->insert([
            'user_plant_id' => 1,
            'diagnostic_id' => 2,
            'diagnosis_date' => now()->subDays(3),
        ]);

        DiagnosticHistory::query()->insert([
            'user_plant_id' => 1,
            'diagnostic_id' => 1,
            'diagnosis_date' => now()->subDays(),
        ]);

        DiagnosticHistory::query()->insert([
            'user_plant_id' => 2,
            'diagnostic_id' => 2,
            'diagnosis_date' => now()->subDays(5),
        ]);

        DiagnosticHistory::query()->insert([
            'user_plant_id' => 2,
            'diagnostic_id' => 1,
            'diagnosis_date' => now()->subDays(2),
        ]);

        User::query()->insert(User::factory()->count(10)->raw());

        Community::query()->insert([
            'content' => 'Pupuk Super Grow adalah solusi tepat untuk tanaman Anda yang membutuhkan nutrisi ekstra. Dengan kandungan NPK yang seimbang, pupuk ini membantu mempercepat pertumbuhan akar dan daun, serta meningkatkan kualitas buah dan bunga. Cocok digunakan untuk berbagai jenis tanaman, baik di pekarangan rumah, kebun, maupun taman.',
            'image' => 'https://saprotan-utama.com/wp-content/uploads/2021/06/Pupuk_NPK.jpg',
            'user_id' => 2,
            'created_at' => now(),
        ]);

        Comment::query()->insert([
            'community_id' => 1,
            'user_id' => 2,
            'content' => 'Mantap pak, saya juga pakai',
            'created_at' => now(),
        ]);

        Comment::query()->insert([
            'community_id' => 1,
            'user_id' => 4,
            'content' => 'Thanks infonya pak',
            'created_at' => now(),
        ]);

        Comment::query()->insert([
            'community_id' => 1,
            'user_id' => 5,
            'content' => 'Sama pupuk ABC bagus mana pak?',
            'images' => 'https://www.berkebun.net/wp-content/uploads/2023/05/pupuk-npk-phonska-4.jpg',
            'created_at' => now(),
        ]);

        Comment::query()->insert([
            'community_id' => 1,
            'comment_id' => 2,
            'user_id' => 2,
            'content' => 'Sama sama pak',
            'created_at' => now(),
        ]);

        Comment::query()->insert([
            'community_id' => 1,
            'comment_id' => 3,
            'user_id' => 2,
            'content' => 'Bagus ini pak',
            'created_at' => now(),
        ]);

        Comment::query()->insert([
            'community_id' => 1,
            'comment_id' => 5,
            'user_id' => 5,
            'content' => 'Oke pak',
            'created_at' => now(),
        ]);
    }
}
