<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Model;

class Guru extends Model
{
    use HasFactory;
    protected $table = "guru";
    protected $guarded = ["id"];
    public $timestamps = false;

    protected $casts = [
        'password' => 'hashed',
    ];

    public function scopeSearch($query, $search)
    {
        if ($search) {
            $query->where('nama', 'like', '%' . $search . '%')
                ->orWhere('nuptk', 'like', '%' . $search . '%');
        }
    }

    public function sekolah()
    {
        return $this->belongsTo(Sekolah::class, 'id_sekolah', 'id');
    }
}
