<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'planting_date' => now(),
            'notes' => 'ganti pupuk 1x seminggu',
        ]);

        UserPlant::query()->insert([
            'user_id' => $user->id,
            'plant_id' => 3,
            'planting_date' => now()->subDays(3),
            'notes' => 'ganti pupuk 1x seminggu',
        ]);
    }
}
