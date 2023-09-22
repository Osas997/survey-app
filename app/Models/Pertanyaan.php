<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    use HasFactory;
    protected $table = "pertanyaan";
    protected $guarded = ["id"];

    public function scopeSearch($query, $search)
    {
        if ($search) {
            $query->where('pertanyaan', 'like', '%' . $search . '%');
        }
    }
}
