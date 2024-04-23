<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    Protected $table = "bukus";

    public $incrementing = "true";

    Protected $primaryKey = "id";

    Protected $keyType = "";

    Protected $guarded = [];

}
