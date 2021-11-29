<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Truk extends Model
{
    use HasFactory;
    protected $table = "truks";
    protected $fillable = [
        'id_buyer',
        'id_user',
        'plat',
        'deskripsi',
        'pic',
        'hp_pic',
    ];
}
