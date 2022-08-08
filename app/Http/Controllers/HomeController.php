<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    User,
    Konfig,
    Blog,
    Galeri,
    Kategori,
    BlogKategori
};
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function __construct()
    {
        $kategoris = Kategori::get();
        View::share('shareKategoris', $kategoris);
    }

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
        $kategori = null;
        return view('pages.publik.artikel', compact('blogs','kategori'));
    }

    public function artikelDetail($slug){
        $blog = Blog::where('title', $slug)->first();
        $latest_blogs = Blog::orderBy('tanggal', 'desc')->take(10)->get();
        $kategoris = Kategori::get();
        if(!$blog) abort(404); 

        return view('pages.publik.artikel-detail', compact('blog','latest_blogs', 'kategoris'));
    }

    public function artikelKategori($slug){
        $kategori = Kategori::where('nama', $slug)->first();
        if(! $kategori) abort(404);
        $blogKategoris = BlogKategori::where('kategoris_id',$kategori->id)->get()->pluck('id');

        $blogs = Blog::whereIn('id', $blogKategoris)->get();

        return view('pages.publik.artikel', compact('blogs','kategori'));
    }

    public function tentang(){
        return view('pages.publik.tentang');
    }

    public function galeri(){
        $galeris = Galeri::get();
        return view('pages.publik.galeri', compact('galeris'));
    }

    public function tentangMasukan(Request $request){
        $data = [
            'status' => 'success'
        ];

        return response()->json($data, 200);
    }
}
