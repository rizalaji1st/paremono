<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Konfig
};
use RealRashid\SweetAlert\Facades\Alert;

class ManajemenKonfigController extends Controller
{
    public function index(){
        $konfigs = Konfig::get();
        return view('pages.admin.manajemen-konfig.index', compact('konfigs'));
    }

    public function store(Request $request){
        Konfig::create([
            'key' => $request['key'],
            'value' => $request['value']
        ]);

        alert()->success('Berhasil','Berhasil menambah data konfig');
        return redirect('/admin/manajemen-konfig');
    }

    public function update(Request $request){
        $konfig = Konfig::find($request['id']);
        $konfig->key = $request['key'];
        $konfig->value = $request['value'];
        $konfig->save();

        alert()->success('Berhasil','Berhasil edit data konfig');
        return redirect('/admin/manajemen-konfig');
    }

    public function destroy(Konfig $konfig){
        $konfig->delete();

        alert()->success('Berhasil','Berhasil menghapus data konfig');
        return redirect('/admin/manajemen-konfig');
    }
}
