<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('divisis')->insert([
            'nama_divisi' => "HRD"
        ]);
        DB::table('divisis')->insert([
            'nama_divisi' => "IT"
        ]);
        DB::table('divisis')->insert([
            'nama_divisi' => "Pemasaran"
        ]);

        DB::table('kompetensis')->insert([
            'kompetensi' => "Kehadiran"
        ]);
        DB::table('kompetensis')->insert([
            'kompetensi' => "Tugas Selesai"
        ]);
        DB::table('kompetensis')->insert([
            'kompetensi' => "Kejujuran"
        ]);
    }
}
