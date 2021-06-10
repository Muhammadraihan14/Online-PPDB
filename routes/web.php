<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\siswacontroller;


// root untuk mengakses Halaman (Page)

// root halaman pertama
Route::get('/', function () {
    return view('welcome');
});

// akses root ke hal PORTAL
Route::get("portal", function () {
    return view('portal');
});

// akses root ke hal login untuk user
Route::get("login_user", function () {
    return view('login_user');
});

// akses root ke hal tambah akun user
Route::get("tambah_akun", function () {
    return view('tambah_akun');
});

// akses root ke hal registrasi user
Route::get("reg", function () {
    return view('reg');
});

// akses root ke hal hal admin
Route::get("login_admin", function () {
    return view('login_admin');
});


// root untuk mengakses fungsi yang ada di Siswacontroller

Route::get("dashboard", [siswacontroller::class, 'index']);
// akses root untuk fungsi reed di hal dashboard
Route::post("dashboard", [siswacontroller::class, 'Tambah_data']);
// akses root untuk fungsi create di hal dashboard

Route::get("dashboard/{id}", [siswacontroller::class, 'show']);
// akses root untuk fungsi show di hal dashboard

Route::put('edit-data/{id}', [siswacontroller::class, 'Edit_data']);
// akses root untuk fungsi show di hal dashboard_Edit

Route::delete('dashboard/{id}', [siswacontroller::class, 'Hapus']);
// akses root untuk fungsi hapus di hal dashboard