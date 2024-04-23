<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    Protected $table = "penjualans";

    public $incrementing = "true";

    Protected $primaryKey = "id";

    Protected $keyType = "";

    Protected $guarded = [];
}
