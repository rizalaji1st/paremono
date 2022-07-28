<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Kategori
};
use RealRashid\SweetAlert\Facades\Alert;

class ManajemenKategoriController extends Controller
{
    public function index(){
        $kategoris = Kategori::get();
        return view('pages.admin.manajemen-kategori.index', compact('kategoris'));
    }

    public function store(Request $request){
        Kategori::create([
            'nama' => $request['nama']
        ]);

        alert()->success('Berhasil','Berhasil menambah data kategori');
        return redirect('/admin/manajemen-kategori');
    }

    public function update(Request $request){
        $kategori = Kategori::find($request['id']);
        $kategori->nama = $request['nama'];
        $kategori->save();

        alert()->success('Berhasil','Berhasil edit data kategori');
        return redirect('/admin/manajemen-kategori');
    }

    public function destroy(Kategori $kategori){
        $kategori->delete();

        alert()->success('Berhasil','Berhasil menghapus data kategori');
        return redirect('/admin/manajemen-kategori');
    }
}
