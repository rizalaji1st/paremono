<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['title','isi','path_foto','in_carousel'];
    
    public function kategoris()
    {
        return $this->belongsToMany(Kategori::class, 'blog_kategoris', 'blogs_id', 'kategoris_id');
    }

    public function blogKategoris(){
        return $this->hasMany(BlogKategori::class,'blogs_id','id');
    }
    
    public function hasKategori($id)
    {
        if ($this->blogKategoris()->where('kategoris_id', $id)->first()) {
            return true;
        };

        return false;
    }
}
