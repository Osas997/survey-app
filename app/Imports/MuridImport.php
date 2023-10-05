<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use App\Models\Murid;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class MuridImport implements ToModel, WithHeadingRow, WithValidation
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Murid([
            "nisn" => $row["nisn"],
            "nama_murid" => $row["nama"],
            "jenis_kelamin" => $row["jenis_kelamin"],
            "alamat" => $row["alamat"],
            "password" => Hash::make($row["password"]),
            "id_sekolah" => Auth::guard('sekolah')->user()->id,
        ]);
    }

    public function rules(): array
    {
        return [
            'nisn' => 'required|unique:murid',
            'nama' => 'required',
            'jenis_kelamin' => 'required|in:l,p',
            'alamat' => 'required',
            'password' => 'required',
        ];
    }
}
