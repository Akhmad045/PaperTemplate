<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distributor extends Model
{
    use HasFactory;
    Protected $table = "distributors";

    public $incrementing = "true";

    Protected $primaryKey = "id";

    Protected $keyType = "string";

    Protected $guarded = [];
}
