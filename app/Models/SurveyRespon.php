<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyRespon extends Model
{
    use HasFactory;
    protected $table = "survey_respon";
    protected $guarded = ["id"];

    public function murid()
    {
        return $this->belongsTo(Murid::class, "id_murid", "id");
    }
}
