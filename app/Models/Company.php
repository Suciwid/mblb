<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $table = "companies";
    protected $fillable = [
        'id_user',
        'perusahaan',
        'telp',
        'alamat',
        'email',
        'name_pic',
        'hp_pic',
        'keterangan',
        'status',
    ];
}
