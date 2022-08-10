<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Umkm,
    UmkmGaleri
};
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class ManajemenUmkmController extends Controller
{
    public function index(){
        $umkms = Umkm::get();
        return view('pages.admin.manajemen-umkm.index', compact('umkms'));
    }

    public function create(){
        $umkm = null;
        return view('pages.admin.manajemen-umkm.create', compact('umkm'));
    }

    public function store(Request $request){
        $ekstensi = $request->file('foto')->getClientOriginalExtension();
        $nama_file = $request->key ."_" . Carbon::now()->timestamp . "." . $ekstensi;
        $path_file = Storage::putFileAs('umkm/foto', $request->file('foto'), $nama_file);
        
        $umkm = Umkm::create([
            'title' => $request['judul'],
            'nama_pemilik' => $request['pemilik'],
            'alamat' => $request['alamat'],
            'wa' => $request['wa'],
            'phone' => $request['phone'],
            'ringkasan' => $request['ringkasan'],
            'isi' => $request['isi'],
            'path_foto' => $path_file
        ]);

        alert()->success('Berhasil','Berhasil menambah umkm');
        return redirect('/admin/manajemen-umkm');
    }

    public function storeGaleri(Request $request){
        $ekstensi = $request->file('image')->getClientOriginalExtension();
        $nama_file = $request->key ."_" . Carbon::now()->timestamp . "." . $ekstensi;
        $path_file = Storage::putFileAs('umkm/foto', $request->file('image'), $nama_file);
        
        $umkm = Umkm::find($request['id']);
        if(!$umkm) abort(404);

        $umkmGaleri = UmkmGaleri::create([
            'umkms_id' => intval($request['id']),
            'path_foto' => $path_file
        ]);

        alert()->success('Berhasil','Berhasil menambah galeri');
        return redirect('/admin/manajemen-umkm/edit/'.$umkm->id);
    }

    public function edit(Umkm $umkm){
        $galeris = UmkmGaleri::where('umkms_id',$umkm->id)->get();
        return view('pages.admin.manajemen-umkm.create', compact('umkm','galeris'));        
    }

    public function update(Request $request, Umkm $umkm){
        if($request->has('foto')){
            Storage::delete($umkm->path_foto);
            
            $ekstensi = $request->file('foto')->getClientOriginalExtension();
            $nama_file = $request['judul'] ."_" . Carbon::now()->timestamp . "." . $ekstensi;
            $path_file = Storage::putFileAs('umkm/foto', $request->file('foto'), $nama_file);

            $umkm->path_foto = $path_file;
        }

        $umkm->title = $request['judul'];
        $umkm->nama_pemilik = $request['pemilik'];
        $umkm->alamat = $request['alamat'];
        $umkm->wa = $request['wa'];
        $umkm->ringkasan = $request['ringkasan'];
        $umkm->isi = $request['isi'];
        $umkm->save();

        alert()->success('Berhasil','Berhasil edit umkm');
        return redirect('/admin/manajemen-umkm');
    }

    public function destroy(Umkm $umkm){
        Storage::delete($umkm->path_foto);
        $umkm->delete();

        alert()->success('Berhasil','Berhasil mengubah data umkm');
        return redirect('/admin/manajemen-umkm');
    }

    public function destroyGaleri(UmkmGaleri $umkmGaleri){
        Storage::delete($umkmGaleri->path_foto);
        $umkmGaleri->delete();

        alert()->success('Berhasil','Berhasil menghapus umkm galeri');
        return redirect('/admin/manajemen-umkm/edit/'.$umkmGaleri->id);
    }
}
