<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Murid;
use App\Models\Pertanyaan;
use App\Models\Sekolah;
use App\Models\SurveyRespon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $title = "Admin Dashboard";

        $jumlahMurid = Murid::count();
        $jumlahSekolah = Sekolah::count();
        $jumlahGuru = Guru::count();

        // jumlahKorban
        $korbanRendah = SurveyRespon::korbanRendah()->count();
        $korbanSedang = SurveyRespon::korbanSedang()->count();
        $korbanTinggi = SurveyRespon::korbanTinggi()->count();
        $korbanSangatTinggi = SurveyRespon::korbanSangatTinggi()->count();

        // jumlahPelaku
        $pelakuRendah = SurveyRespon::pelakuRendah()->count();
        $pelakuSedang = SurveyRespon::pelakuSedang()->count();
        $pelakuTinggi = SurveyRespon::pelakuTinggi()->count();
        $pelakuSangatTinggi = SurveyRespon::pelakuSangatTinggi()->count();

        $tipePelaku = Pertanyaan::where('tipe', 'pelaku')
        ->withCount([
            'jawaban as jawaban_skor_lebih_dari_2_count' => function ($query) {
                $query->where('skor', '>', 2);
            },
            'jawaban as jawaban_skor_kurang_dari_3_count' => function ($query) {
                $query->where('skor', '<', 3);
            }
        ])->get();

        return view("dashboard.admin.dashboard", compact('title', 'tipePelaku', 'jumlahMurid', 'jumlahSekolah', 'jumlahGuru', 'korbanRendah', 'korbanSedang', 'korbanTinggi', 'korbanSangatTinggi', 'pelakuRendah', 'pelakuSedang', 'pelakuTinggi', 'pelakuSangatTinggi'));
    }
    public function indexSekolah()
    {
        $title = "Sekolah Dashboard";

        $jumlahMurid = Murid::where('id_sekolah', auth('sekolah')->user()->id)->count();
        $jumlahGuru = Guru::where('id_sekolah', auth('sekolah')->user()->id)->count();

        // jumlahKorban
        $korbanRendah = SurveyRespon::korbanRendah()->sekolah()->count();
        $korbanSedang = SurveyRespon::korbanSedang()->sekolah()->count();
        $korbanTinggi = SurveyRespon::korbanTinggi()->sekolah()->count();
        $korbanSangatTinggi = SurveyRespon::korbanSangatTinggi()->sekolah()->count();

        // jumlahPelaku
        $pelakuRendah = SurveyRespon::pelakuRendah()->sekolah()->count();
        $pelakuSedang = SurveyRespon::pelakuSedang()->sekolah()->count();
        $pelakuTinggi = SurveyRespon::pelakuTinggi()->sekolah()->count();
        $pelakuSangatTinggi = SurveyRespon::pelakuSangatTinggi()->sekolah()->count();

        $tipePelaku = Pertanyaan::where('tipe', 'pelaku')
        ->withCount([
            'jawaban as jawaban_skor_lebih_dari_2_count' => function ($query) {
                $query->where('skor', '>', 2)->whereHas('surveyRespon',function ($query){
                    $query->where('id_sekolah', auth('sekolah')->user()->id);
                });
            },
            'jawaban as jawaban_skor_kurang_dari_3_count' => function ($query) {
                $query->where('skor', '<', 3)->whereHas('surveyRespon',function ($query){
                    $query->where('id_sekolah', auth('sekolah')->user()->id);
                });
            }
        ])->get();

        return view('dashboard.sekolah.dashboard', compact('title','tipePelaku', 'jumlahMurid', 'jumlahGuru', 'korbanRendah', 'korbanSedang', 'korbanTinggi', 'korbanSangatTinggi', 'pelakuRendah', 'pelakuSedang', 'pelakuTinggi', 'pelakuSangatTinggi'));
    }

    public function indexGuru()
    {
        $title = "Guru Dashboard";

        $jumlahMurid = Murid::where('id_sekolah', auth('guru')->user()->sekolah->id)->count();

        // jumlahKorban
        $korbanRendah = SurveyRespon::korbanRendah()->guruSekolah()->count();
        $korbanSedang = SurveyRespon::korbanSedang()->guruSekolah()->count();
        $korbanTinggi = SurveyRespon::korbanTinggi()->guruSekolah()->count();
        $korbanSangatTinggi = SurveyRespon::korbanSangatTinggi()->guruSekolah()->count();

        // jumlahPelaku
        $pelakuRendah = SurveyRespon::pelakuRendah()->guruSekolah()->count();
        $pelakuSedang = SurveyRespon::pelakuSedang()->guruSekolah()->count();
        $pelakuTinggi = SurveyRespon::pelakuTinggi()->guruSekolah()->count();
        $pelakuSangatTinggi = SurveyRespon::pelakuSangatTinggi()->guruSekolah()->count();

        $tipePelaku = Pertanyaan::where('tipe', 'pelaku')
        ->withCount([
            'jawaban as jawaban_skor_lebih_dari_2_count' => function ($query) {
                $query->where('skor', '>', 2)->whereHas('surveyRespon',function ($query){
                    $query->where('id_sekolah', auth('guru')->user()->id_sekolah);
                });
            },
            'jawaban as jawaban_skor_kurang_dari_3_count' => function ($query) {
                $query->where('skor', '<', 3)->whereHas('surveyRespon',function ($query){
                    $query->where('id_sekolah', auth('guru')->user()->id_sekolah);
                });
            }
        ])->get();

        return view('dashboard.guru.dashboard', compact('title', 'jumlahMurid', 'tipePelaku', 'korbanRendah', 'korbanSedang', 'korbanTinggi', 'korbanSangatTinggi', 'pelakuRendah', 'pelakuSedang', 'pelakuTinggi', 'pelakuSangatTinggi'));
    }

    public function indexMurid()
    {
        return view('dashboard.murid.dashboard', [
            'title' => 'Dashboard Murid'
        ]);
    }
}
