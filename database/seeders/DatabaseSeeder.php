<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Pasien;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'rendi',
        //     'email' => 'rendi@gmail.com',
        //     'password' => bcrypt('password'),
        // ]);

        // Pasien::factory()->create([
        //     'nik' => Str::random(16),
        //     'nama' => Str::random(20),
        //     'tanggal_lahir' => Date::random(),
        // ]);

        DB::table('users')->insert([
            'name' => 'Rendi Hendra',
            'email' => 'rendi@gmail.com',
            'password' => Hash::make('rendi'),
        ]);
    }
}
