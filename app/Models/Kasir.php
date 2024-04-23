<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasir extends Model
{
    use HasFactory;

    Protected $table = "kasirs";

    public $incrementing = "true";

    Protected $primaryKey = "id";

    Protected $keyType = "string";

    Protected $guarded = [];
}
