<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Model;

class Survey extends Model
{
    use HasFactory;
    protected $table = "survey";
    protected $guarded = ["id"];

    public function pertanyaan()
    {
        return $this->hasMany(Pertanyaan::class, "id_survey", "id");
    }
}
