<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    User,
    Konfig
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
        $galeri1 = Konfig::where('key','galeri_home_1')->first();
        $galeri2 = Konfig::where('key','galeri_home_2')->first();
        $galeri3 = Konfig::where('key','galeri_home_3')->first();
        $galeri4 = Konfig::where('key','galeri_home_4')->first();
        return view('welcome', compact('galeri1','galeri2','galeri3','galeri4'));
    }
}
