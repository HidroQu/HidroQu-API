<?php

namespace Database\Seeders;

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

        // Create a specific user
        $mainUser = User::factory()->create([
            'name' => 'HidroQu',
            'email' => 'hidroqu@gmail.com',
            'password' => bcrypt('password'),
        ]);

        // Create additional users
        $users = User::factory(10)->create();

        // Cache timestamps
        $now = now();

        // Insert UserPlants
        UserPlant::query()->insert([
            [
                'user_id' => $mainUser->id,
                'plant_id' => 1,
                'planting_date' => $now->copy()->subDays(5),
                'notes' => 'ganti pupuk 1x seminggu',
            ],
            [
                'user_id' => $mainUser->id,
                'plant_id' => 3,
                'planting_date' => $now->copy()->subDays(10),
                'notes' => 'ganti pupuk 1x seminggu',
            ],
        ]);

        // Insert DiagnosticHistories
        DiagnosticHistory::query()->insert([
            ['user_plant_id' => 1, 'diagnostic_id' => 1, 'diagnosis_date' => $now->copy()->subDays(4)],
            ['user_plant_id' => 1, 'diagnostic_id' => 2, 'diagnosis_date' => $now->copy()->subDays(3)],
            ['user_plant_id' => 1, 'diagnostic_id' => 1, 'diagnosis_date' => $now],
            ['user_plant_id' => 2, 'diagnostic_id' => 2, 'diagnosis_date' => $now->copy()->subDays(5)],
            ['user_plant_id' => 2, 'diagnostic_id' => 1, 'diagnosis_date' => $now->copy()->subDays(2)],
        ]);

        // Insert a specific Community post
        $community = Community::create([
            'content' => 'Pupuk Super Grow adalah solusi tepat untuk tanaman Anda yang membutuhkan nutrisi ekstra. Dengan kandungan NPK yang seimbang, pupuk ini membantu mempercepat pertumbuhan akar dan daun, serta meningkatkan kualitas buah dan bunga. Cocok digunakan untuk berbagai jenis tanaman, baik di pekarangan rumah, kebun, maupun taman.',
            'image' => 'https://saprotan-utama.com/wp-content/uploads/2021/06/Pupuk_NPK.jpg',
            'user_id' => $users->random()->id,
            'created_at' => $now,
        ]);

        // Insert specific Comments
        Comment::query()->insert([
            [
                'community_id' => $community->id,
                'comment_id' => null,
                'user_id' => 2,
                'content' => 'Mantap pak, saya juga pakai',
                'images' => '',
                'created_at' => $now,
            ],
            [
                'community_id' => $community->id,
                'comment_id' => null,
                'user_id' => 4,
                'content' => 'Thanks infonya pak',
                'images' => '',
                'created_at' => $now,
            ],
            [
                'community_id' => $community->id,
                'comment_id' => null,
                'user_id' => 5,
                'content' => 'Sama pupuk ABC bagus mana pak?',
                'images' => 'https://www.berkebun.net/wp-content/uploads/2023/05/pupuk-npk-phonska-4.jpg',
                'created_at' => $now,
            ],
            [
                'community_id' => $community->id,
                'comment_id' => 2,
                'user_id' => 2,
                'content' => 'Sama sama pak',
                'images' => '',
                'created_at' => $now,
            ],
            [
                'community_id' => $community->id,
                'comment_id' => 3,
                'user_id' => 2,
                'content' => 'Bagus ini pak',
                'images' => '',
                'created_at' => $now,
            ],
            [
                'community_id' => $community->id,
                'comment_id' => 5,
                'user_id' => 5,
                'content' => 'Oke pak',
                'images' => '',
                'created_at' => $now,
            ],
        ]);

        // Generate additional Community posts and comments dynamically
        $communities = Community::factory(20)->create();

        $communities->take(5)->each(function ($community) use ($users, $now) {
            // Generate 5 comments for each community post
            $comments = Comment::factory(rand(2, 5))->create([
                'community_id' => $community->id,
                'user_id' => $users->random()->id,
                'created_at' => $now,
            ]);

            // Generate 2 replies for each comment
            $comments->each(function ($comment) use ($users, $now) {
                Comment::factory(rand(1, 3))->create([
                    'community_id' => $comment->community_id,
                    'comment_id' => $comment->id,
                    'user_id' => $users->random()->id,
                    'created_at' => $now,
                ]);
            });
        });
    }
}
