<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Allfiandi Rahman',
            'username' => 'allfiandi',
            'position' => 'MGMP Informatika',
            'email' => 'allfiandirhmn@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ]);
        
        User::create([
            'name' => 'R. Hana Amalia, S.T.',
            'username' => 'hanaamalia',
            'position' => 'MGMP Informatika',
            'email' => 'hanaamalia@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ]);
        
        User::create([
            'name' => 'Daniarsyah, S.Kom.',
            'username' => 'natedekaka',
            'position' => 'MGMP Informatika',
            'email' => 'natedekaka@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ]);

        User::create([
            'name' => 'Lingga Oktaviani, S.Kom.',
            'username' => 'linggaoktaviani',
            'position' => 'MGMP Informatika',
            'email' => 'linggaoktaviani@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ]);

        User::create([
            'name' => 'Razzib Zabbal Noor, S.Kom.',
            'username' => 'razzibzabbal',
            'position' => 'MGMP Informatika',
            'email' => 'razzibzabbal@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ]);
        
        User::create([
            'name' => 'Edi Kusnadi, S.Kom., Gr., M.Pd.',
            'username' => 'edikusnadi',
            'position' => 'MGMP Informatika',
            'email' => 'edikusnadi@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ]);
        
        User::create([
            'name' => 'Muharima Rasyid Noor, SST.',
            'username' => 'rasyidnoor',
            'position' => 'MGMP Informatika',
            'email' => 'rasyidnoor@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ]);
    }
}