<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use App\Models\Guru;
use App\Models\Murid;
use App\Models\Pertanyaan;
use App\Models\Sekolah;
use App\Models\Survey;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

        Admin::insert(
            [
                [
                    "nama" => "fahmi",
                    "username" => "fahmigenteng",
                    "password" => Hash::make(12345)
                ],
                [
                    "nama" => "rendi",
                    "username" => "rendisempu",
                    "password" => Hash::make(12345)
                ]
            ]
        );

        Sekolah::create([
            "npsn" => "123",
            "password" => "12345",
            "nama_sekolah" => "SMPN 1 SEMPU",
            "alamat_sekolah" => "Rth SEMPU",
            "status" => "negeri"
        ]);

        Guru::create([
            "nuptk" => "nuptk",
            "nama" => "samsul hadi",
            "jenis_kelamin" => "l",
            "password" => "12345",
            "id_sekolah" => 1
        ]);

        Murid::create([
            "nisn" => "nisn",
            "password" => "12345",
            "nama_murid" => "Diki Brong",
            "jenis_kelamin" => "L",
            "id_sekolah" => 1,
            "alamat" => "cungking"
        ]);

        Survey::create([
            "nama_survey" => "perundungan",
            "deskripsi" => "survey tentang perundungan"
        ]);

        // Pertanyaan::create([
        //     "id_survey" => 1,
        //     "pertanyaan" => "Apakah Kamu Sudah Makan?"
        // ]);

        // Pertanyaan::create([
        //     "id_survey" => 1,
        //     "pertanyaan" => "Apakah Kamu Sudah Mandi?"
        // ]);
    }
}
