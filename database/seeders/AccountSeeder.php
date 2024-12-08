<?php

namespace Database\Seeders;

use App\Enums\RoleType;
use App\Models\User;
use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password = '$2y$12$BQfh961RDTmvwg1JwGMHZeu2keaR2lAvA/CmvZHo876IFB3eGmcQC';
        $now = now();

        User::query()->insert([
            [
                'name' => 'Holiq Ibrahim',
                'email' => 'holiq.ibrahim376@gmail.com',
                'email_verified_at' => $now,
                'password' => $password,
            ],
            [
                'name' => 'Eric Wijaya Lay',
                'email' => 'ericwijayalay@gmail.com',
                'email_verified_at' => $now,
                'password' => $password,
            ],
            [
                'name' => "Muhammad Hanif Sya'bani",
                'email' => 'mh070940@gmail.com',
                'email_verified_at' => $now,
                'password' => $password,
            ],
            [
                'name' => 'Rihan Naufaldihanif',
                'email' => 'rihannaufal22@gmail.com',
                'email_verified_at' => $now,
                'password' => $password,
            ],
            [
                'name' => 'Siti Latifah',
                'email' => 'st.latifah644@gmail.com',
                'email_verified_at' => $now,
                'password' => $password,
            ],
            [
                'name' => 'Syakillah Nachwa',
                'email' => 'syakillahnachwa081@gmail.com',
                'email_verified_at' => $now,
                'password' => $password,
            ],
            [
                'name' => 'Muammar Ramadhani Maulizidan',
                'email' => 'muammarramadhanimaulizidannn@gmail.com',
                'email_verified_at' => $now,
                'password' => $password,
            ],
        ]);

        User::query()->get()->each(function ($user) {
            $user->syncRoles(RoleType::Admin);
        });
    }
}
