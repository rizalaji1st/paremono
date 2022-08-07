<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Konfig
};
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class KonfigGaleriHomeController extends Controller
{
    public function index(){
        $konfigs = Konfig::where('key','LIKE','galeri_home_%')->get();
        return view('pages.admin.konfig-galeri-home.index', compact('konfigs'));
    }

    public function store(Request $request){
        $ekstensi = $request->file('value')->getClientOriginalExtension();
        $nama_file = $request->key ."_" . Carbon::now()->timestamp . "." . $ekstensi;
        $path_file = Storage::putFileAs('public/galeri-home', $request->file('value'), $nama_file);
        
        Konfig::create([
            'key' => $request['key'],
            'value' => $path_file
        ]);

        alert()->success('Berhasil','Berhasil menambah konfig galeri home');
        return redirect('/admin/konfig-galeri-home');
    }

    public function update(Request $request){
        $konfig = Konfig::find($request['id']);

        $ekstensi = $request->file('value')->getClientOriginalExtension();
        $nama_file = $request->key ."_" . Carbon::now()->timestamp . "." . $ekstensi;
        $path_file = Storage::putFileAs('public/galeri-home', $request->file('value'), $nama_file);
        
        Storage::delete($konfig->value);

        $konfig->key = $request['key'];
        $konfig->value = $path_file;
        $konfig->save();

        alert()->success('Berhasil','Berhasil edit data konfig');
        return redirect('/admin/konfig-galeri-home');
    }

    public function destroy(Konfig $konfig){
        Storage::delete($konfig->value);
        $konfig->delete();

        alert()->success('Berhasil','Berhasil menghapus data konfig');
        return redirect('/admin/konfig-galeri-home');
    }
}
