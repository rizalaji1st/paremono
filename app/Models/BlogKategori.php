<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogKategori extends Model
{
    use HasFactory;

    protected $fillable = ['blogs_id','kategoris_id'];
}
