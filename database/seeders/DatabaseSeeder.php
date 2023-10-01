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

        Pertanyaan::create([
            "id_survey" => 1,
            "pertanyaan" => "Saya dipanggil dengan nama panggilan yang jelek, diolok-olok, atau diejek sehingga saya merasa sakit hati?",
            "tipe" => "korban"
        ]);

        Pertanyaan::create([
            "id_survey" => 1,
            "pertanyaan" => "Saya dipukul, ditendang, didorong, dipojokkan ke tembok, atau dikunci di dalam ruangan",
            "tipe" => "korban"
        ]);

        Pertanyaan::create([
            "id_survey" => 1,
            "pertanyaan" => "Murid lain berbohong atau menyebarkan desas-desus palsu tentang saya dan mencoba membuat orang lain tidak menyukai saya",
            "tipe" => "korban"
        ]);
        Pertanyaan::create([
            "id_survey" => 1,
            "pertanyaan" => "Uang atau barang saya diambil dengan paksa atau dirusak",
            "tipe" => "korban"
        ]);
        Pertanyaan::create([
            "id_survey" => 1,
            "pertanyaan" => "Saya diancam atau dipaksa melakukan hal-hal yang tidak saya inginkan",
            "tipe" => "korban"
        ]);
        Pertanyaan::create([
            "id_survey" => 1,
            "pertanyaan" => "Saya diejek tentang pekerjaan orang tua saya",
            "tipe" => "korban"
        ]);
        Pertanyaan::create([
            "id_survey" => 1,
            "pertanyaan" => "Saya diejek tentang bentuk tubuh atau warna kulit saya",
            "tipe" => "korban"
        ]);
        Pertanyaan::create([
            "id_survey" => 1,
            "pertanyaan" => "Saya dibentak dengan nama, komentar, atau gerakan kasar",
            "tipe" => "korban"
        ]);
        Pertanyaan::create([
            "id_survey" => 1,
            "pertanyaan" => "Saya ditakut-takuti dengan nama yang kejam, komentar atau gerak tubuh yang mesum",
            "tipe" => "korban"
        ]);

        Pertanyaan::create([
            "id_survey" => 1,
            "pertanyaan" => "Saya diejek dengan nama atau komentar jahat tentang kemampuan/prestasi saya",
            "tipe" => "korban"
        ]);

        Pertanyaan::create([
            "id_survey" => 1,
            "pertanyaan" => "Saya dibully dengan menggunakan ponsel",
            "tipe" => "korban"
        ]);

        Pertanyaan::create([
            "id_survey" => 1,
            "pertanyaan" => "Saya dibully dengan penggunaan komputer/laptop",
            "tipe" => "korban"
        ]);

        Pertanyaan::create([
            "id_survey" => 1,
            "pertanyaan" => "Saya diganggu dengan cara lain",
            "tipe" => "korban"
        ]);

        Pertanyaan::create([
            "id_survey" => 1,
            "pertanyaan" => "Saya memanggil siswa lain dengan nama yang buruk, mengolok-olok atau bercanda untuk menyakitinya",
            "tipe" => "pelaku"
        ]);
        Pertanyaan::create([
            "id_survey" => 1,
            "pertanyaan" => "Saya menjauhkan seseorang dari teman-teman saya dengan sengaja, mengucilkannya dari kelompok saya atau sama sekali mengabaikannya",
            "tipe" => "pelaku"
        ]);
        Pertanyaan::create([
            "id_survey" => 1,
            "pertanyaan" => "Saya memukul, menendang, dan mendorongnya atau menguncinya di dalam ruangan",
            "tipe" => "pelaku"
        ]);
        Pertanyaan::create([
            "id_survey" => 1,
            "pertanyaan" => "Saya menyebarkan kabar bohong tentang dia dan mencoba membuat orang lain tidak menyukainya",
            "tipe" => "pelaku"
        ]);
        Pertanyaan::create([
            "id_survey" => 1,
            "pertanyaan" => "Saya mengambil uang atau barang darinya atau merusak barang miliknya",
            "tipe" => "pelaku"
        ]);

        Pertanyaan::create([
            "id_survey" => 1,
            "pertanyaan" => "Saya mengancam atau memaksanya melakukan hal-hal yang tidak ingin dia lakukan",
            "tipe" => "pelaku"
        ]);

        Pertanyaan::create([
            "id_survey" => 1,
            "pertanyaan" => "Saya mengejeknya dengan nama atau komentar jahat tentang ras atau warna kulitnya",
            "tipe" => "pelaku"
        ]);

        Pertanyaan::create([
            "id_survey" => 1,
            "pertanyaan" => "Saya mengejeknya dengan nama atau komentar jahat tentang agamanya",
            "tipe" => "pelaku"
        ]);
        Pertanyaan::create([
            "id_survey" => 1,
            "pertanyaan" => "Saya mengejeknya dengan nama atau komentar jahat tentang kecacatannya",
            "tipe" => "pelaku"
        ]);
        Pertanyaan::create([
            "id_survey" => 1,
            "pertanyaan" => "Saya mem-bully dia dengan kata-kata kasar, komentar atau gerak tubuh mesum/porno",
            "tipe" => "pelaku"
        ]);

        Pertanyaan::create([
            "id_survey" => 1,
            "pertanyaan" => "Saya mengejeknya dengan nama atau komentar jahat karena dia pintar/pandai",
            "tipe" => "pelaku"
        ]);

        Pertanyaan::create([
            "id_survey" => 1,
            "pertanyaan" => "Saya membully dia dengan menggunakan ponsel",
            "tipe" => "pelaku"
        ]);

        Pertanyaan::create([
            "id_survey" => 1,
            "pertanyaan" => "Saya membully dia dengan menggunakan komputer/laptop",
            "tipe" => "pelaku"
        ]);

        Pertanyaan::create([
            "id_survey" => 1,
            "pertanyaan" => "Saya mengganggunya dengan cara lain",
            "tipe" => "pelaku"
        ]);
    }
}
