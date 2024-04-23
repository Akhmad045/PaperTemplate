<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPasok extends Model
{
    use HasFactory;

    Protected $table = "detail_pasoks";

    public $incrementing = "true";

    Protected $primaryKey = "id";

    Protected $keyType = "";

    Protected $guarded = [];

}
