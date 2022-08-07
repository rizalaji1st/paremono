<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Galeri
};
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class ManajemenGaleriController extends Controller
{
    public function index(){
        $galeris = Galeri::get();
        return view('pages.admin.manajemen-galeri.index', compact('galeris'));
    }

    public function store(Request $request){
        $ekstensi = $request->file('image')->getClientOriginalExtension();
        $nama_file = $request->key ."_" . Carbon::now()->timestamp . "." . $ekstensi;
        $path_file = Storage::putFileAs('publik/galeri', $request->file('image'), $nama_file);
        
        Galeri::create([
            'nama' => $request['nama'],
            'tanggal' => $request['tanggal'],
            'keterangan' => $request['keterangan'],
            'in_carousel' => intval($request['in_carousel']),
            'path_foto' => $path_file
        ]);

        alert()->success('Berhasil','Berhasil menambah galeri');
        return redirect('/admin/manajemen-galeri');
    }

    public function update(Request $request){
        $galeri = Galeri::find($request['id']);
        if ($request->has('image')) {
                    $ekstensi = $request->file('image')->getClientOriginalExtension();
                    $nama_file = $request->key ."_" . Carbon::now()->timestamp . "." . $ekstensi;
                    $path_file = Storage::putFileAs('public/galeri', $request->file('image'), $nama_file);
            
                    $galeri->path_foto = $path_file;
                    Storage::delete($galeri->path_foto);
        }
        

        $galeri->nama = $request['nama'];
        $galeri->tanggal = $request['tanggal'];
        $galeri->keterangan = $request['keterangan'];
        $galeri->in_carousel = intval($request['in_carousel']);
        $galeri->save();

        alert()->success('Berhasil','Berhasil edit data konfig');
        return redirect('/admin/manajemen-galeri');
    }

    public function destroy(Galeri $galeri){
        Storage::delete($galeri->path_foto);
        $galeri->delete();

        alert()->success('Berhasil','Berhasil menghapus data galeri');
        return redirect('/admin/manajemen-galeri');
    }
}
