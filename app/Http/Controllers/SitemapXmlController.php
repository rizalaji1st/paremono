<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Blog,
    Umkm
};

class SitemapXmlController extends Controller
{
    public function index() {
        return response()->view('pages.sitemap.index')->header('Content-Type', 'text/xml');
    }

    public function artikel() {
        $posts = Blog::get();
        return response()->view('pages.sitemap.artikel', [
            'posts' => $posts
        ])->header('Content-Type', 'text/xml');
    }

    public function umkm() {
        $umkms = Umkm::get();
        return response()->view('pages.sitemap.umkm', [
            'umkms' => $umkms
        ])->header('Content-Type', 'text/xml');
    }
}
