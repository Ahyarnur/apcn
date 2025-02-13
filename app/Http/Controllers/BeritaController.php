<?php

namespace App\Http\Controllers;


use App\Models\berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function beranda(){
        $data = berita::paginate(3);
        return view('beranda', compact('data'));
    }

    public function tambah(){
        return view('tambah');
    }
    public function edit($id){
        $edit = berita::find($id);
        return view('edit', compact('edit'));
    }
    public function showdata(){
        $show = berita::all();
        return view('showdata', compact('show'));
    }

    public function detail($id){
        $detail = Berita::find($id);
        return view('detail',compact('detail'));
    }


    // tambah data
    public function create(Request $request){
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg'

        ]);
        $foto = $request->file('foto');
        $lokasi = Storage::disk('public')->put('berita', $foto);

        berita::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'foto' => $lokasi,
        ]);

        return redirect()->route('home'); 
    }
      // tambah data

      //hapus data
    public function delete($id){
        $hps = berita::find($id);
        $hps -> delete();
        return redirect()->back();
    }
    //hapus data

    
    //edit data
    public function update(Request $request, $id){
        $edit = berita::find($id);
        $edit->judul = $request->judul;
        $edit->deskripsi = $request->deskripsi;
        

        if($request->file('foto')){
            Storage::disk('public')->delete('public/'.$edit->foto);
            $foto = $request->file('foto');
            $lokasi = Storage::disk('public')->put('berita', $foto);
            $edit->foto = $lokasi;
        }

        $edit->save();
        return redirect()->route('showdata');
    }
    //edit data
}
