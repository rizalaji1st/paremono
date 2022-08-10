<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    use HasFactory;

    protected $fillable = ['path_foto','title','nama_pemilik','alamat','isi','ringkasan','wa','phone'];

    public function galeris(){
        return $this->hasMany(UmkmGaleri::class, 'umkms_id','id');
    }
}
