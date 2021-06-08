<?php

namespace App\Http\Controllers;

use App\Siswa;
use Illuminate\Http\Request;


class Siswacontroller extends Controller
{
     public function index() {
        $read  = Siswa::all();
       
     return view('dashboard', compact('read'));
} 
// fungsi untuk melakukan read(meliahat tabel yang terkoneksi ke database)

public function Tambah_data(Request $request) {
        Siswa::create($request->all());

        return back();
}
// fungsi untuk melakukan create(menambahkan data)


 public function show($id) {
        $siswa = Siswa::find($id);

        return view('dashboard_Edit', compact('siswa'));
    }
// fungsi show adalah fungsi untuk melemparkan data lama,menggunakan id 



public function Edit_data($id, Request $request) {
        $siswa = Siswa::find($id);
        $siswa->fill($request->all());
        $siswa->save();

        return redirect('dashboard');


    }

// fungsi edit data adalah fungsi untuk mengubah data lama, yang diubah admin, setelah itu di save, dan ditampilkan di tabel yang ada halaman dashboard
}

