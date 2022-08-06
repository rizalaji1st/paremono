<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    User,
    Konfig,
    Blog
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
        return view('welcome', compact('galeri_homes', 'blogs'));
    }
}
