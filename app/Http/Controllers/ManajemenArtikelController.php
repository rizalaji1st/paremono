<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Blog,
    Kategori,
    BlogKategori
};
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class ManajemenArtikelController extends Controller
{
    public function index(){
        $blogs = Blog::orderBy('created_at', 'DESC')->get();
        return view('pages.admin.manajemen-artikel.index', compact('blogs'));
    }

    public function create(){
        $kategoris = Kategori::get();
        $blog = null;
        return view('pages.admin.manajemen-artikel.create', compact('kategoris', 'blog'));
    }

    public function store(Request $request){
        $ekstensi = $request->file('foto')->getClientOriginalExtension();
        $nama_file = $request->key ."_" . Carbon::now()->timestamp . "." . $ekstensi;
        $path_file = Storage::putFileAs('artikel/foto', $request->file('foto'), $nama_file);
        
        $blog = Blog::create([
            'title' => $request['judul'],
            'isi' => $request['isi'],
            'in_carousel' => intval($request['in_carousel']),
            'path_foto' => $path_file
        ]);

        BlogKategori::create([
            'blogs_id' => $blog->id,
            'kategoris_id' => intval($request['kategori'])
        ]);

        alert()->success('Berhasil','Berhasil menambah artikel');
        return redirect('/admin/manajemen-artikel');
    }

    public function update(Request $request, Blog $blog){
        if($request->has('foto')){
            Storage::delete($blog->path_foto);
            
            $ekstensi = $request->file('foto')->getClientOriginalExtension();
            $nama_file = $request->key ."_" . Carbon::now()->timestamp . "." . $ekstensi;
            $path_file = Storage::putFileAs('artikel/foto', $request->file('foto'), $nama_file);

            $blog->path_foto = $path_file;
        }

        $blog->title = $request['judul'];
        $blog->isi = $request['isi'];
        $blog->in_carousel = intval($request['in_carousel']);
        $blog->save();

        alert()->success('Berhasil','Berhasil edit data artikel');
        return redirect('/admin/manajemen-artikel');
    }

    public function edit(Blog $blog){
        $kategoris = Kategori::get();
        return view('pages.admin.manajemen-artikel.create', compact('blog','kategoris'));        
    }

    public function destroy(Blog $blog){
        Storage::delete($blog->path_foto);
        $blog->delete();

        alert()->success('Berhasil','Berhasil menghapus data artikel');
        return redirect('/admin/manajemen-artikel');
    }
}
