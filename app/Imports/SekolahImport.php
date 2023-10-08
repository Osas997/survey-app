<?php

namespace App\Imports;

use App\Models\Sekolah;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class SekolahImport implements ToModel, WithHeadingRow, WithValidation
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Sekolah([
            "nama_sekolah" => $row["nama_sekolah"],
            "npsn" => $row["npsn"],
            "password" => Hash::make($row["password"]),
            "alamat_sekolah" => $row["alamat"],
            "status" => $row["status"],
        ]);
    }

    public function rules(): array
    {
        return [
            'npsn' => 'required|unique:sekolah',
            'nama_sekolah' => 'required',
            'alamat' => 'required',
            'password' => 'required',
            'status' => 'required|in:negeri,swasta',
        ];
    }
}
