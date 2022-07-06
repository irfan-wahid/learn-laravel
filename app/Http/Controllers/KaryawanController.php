<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//untuk menggunakan model
use App\Models\Karyawan;

//untuk menggunakan query builder laravel
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    public function data(){
        //get data dari table karyawan
        //Menggunakan elloquent
        $karyawan = Karyawan::paginate(10);

        //tidak menggunakan elloquent
        /* $karyawan = DB::table('karyawan')->get()->paginate(10); */

        //mengirim data karyawan ke view index
        return view('data',['karyawan' => $karyawan]);
    }

    public function tambah(){
	// memanggil view tambah
	return view('tambah');
}

    public function store(Request $request){
        DB::table('karyawan')->insert([
            'nama' => $request->nama,
            'npa' => $request->npa,
            'alamat' => $request->alamat
        ]);
        return redirect('/karyawan');
    }

    public function delete($id){
        DB::table('karyawan')->where ('id',$id)->delete();

        return redirect('/karyawan');
    }

    public function edit($id){
        //get data dari table karyawan
        $karyawan = DB::table('karyawan')->where('id',$id)->get();

        //mengirim data karyawan ke view index
        return view('edit',['karyawan' => $karyawan]);
    }

    public function update(Request $request){
        DB::table('karyawan')->where('id',$request->id)->update([
            'nama' => $request->nama,
            'npa' => $request->npa,
            'alamat' => $request->alamat
        ]);

        return redirect("/karyawan");
    }

    public function cari(Request $request){
        $cari = $request->cari;

        //untuk mencari data pada dua tabel yang berbeda, tambahkan with('tabel relasi')
        $karyawan = Karyawan::with('Pekerjaan')->where('nama', 'like', "%".$cari."%")->paginate();

        return view('data', ['karyawan' => $karyawan]);
    }
}

