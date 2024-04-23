<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPenjualan extends Model
{
    use HasFactory;

    Protected $table = "detail_penjualan";

    public $incrementing = "true";

    Protected $primaryKey = "id";

    Protected $keyType = "";

    Protected $guarded = [];
}
