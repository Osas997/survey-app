<?php

namespace App\Imports;

use App\Models\Guru;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class GuruImport implements ToModel, WithHeadingRow, WithValidation
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Guru([
            "nama" => $row["nama_guru"],
            "nuptk" => $row["nuptk"],
            "jenis_kelamin" => $row["jenis_kelamin"],
            "password" => Hash::make($row["password"]),
            "id_sekolah" => Auth::guard('sekolah')->user()->id,
        ]);
    }

    public function rules(): array
    {
        return [
            'nama_guru' => 'required',
            'nuptk' => 'required|unique:guru',
            'jenis_kelamin' => 'required|in:l,p,L,P',
            'password' => 'required',
        ];
    }
}
