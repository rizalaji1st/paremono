<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    User,
    Konfig,
    Blog,
    Galeri,
    Kategori
};

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $galeri_homes = Konfig::where('key','LIKE','galeri_home_%')->get();
        $blogs = Blog::where('in_carousel', true)->get();
        $galeris = Galeri::where('in_carousel', true)->get();
        return view('welcome', compact('galeri_homes', 'blogs', 'galeris'));
    }

    public function artikel(){
        $blogs = Blog::where('in_carousel', true)->get();
        return view('pages.publik.artikel', compact('blogs'));
    }

    public function artikelDetail($slug){
        $blog = Blog::where('title', $slug)->first();
        $latest_blogs = Blog::orderBy('tanggal', 'desc')->take(10)->get();
        $kategoris = Kategori::get();
        if(!$blog) abort(404); 

        return view('pages.publik.artikel-detail', compact('blog','latest_blogs', 'kategoris'));
    }

}
