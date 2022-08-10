<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UmkmGaleri extends Model
{
    use HasFactory;

    protected $fillable = ['umkms_id','path_foto'];
}
