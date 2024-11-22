<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
    }
}
