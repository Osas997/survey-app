<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Model;

class Sekolah extends Model
{
    use HasFactory;
    protected $table = "sekolah";
    protected $guarded = ["id"];
    protected $casts = [
        'password' => 'hashed',
    ];

    public function scopeSearch($query, $search)
    {
        if ($search) {
            $query->where('nama_sekolah', 'like', '%' . $search . '%');
        }
    }
}
