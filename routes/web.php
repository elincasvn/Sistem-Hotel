<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// super admin 
Route::get('/login-superAdmin', function () {
    return view('pages/superAdmin/login-superAdmin');
});
Route::get('/formLogin-superAdmin', function () {
    return view('pages/superAdmin/formLogin-superAdmin');
});
Route::get('/dashboard-superAdmin', function () {
    return view('pages/superAdmin/dashboard-superAdmin');
});
Route::get('/kategori-superAdmin', function () {
    return view('pages/superAdmin/kategori-superAdmin');
});
Route::get('/kamar-superAdmin', function () {
    return view('pages/superAdmin/kamar-superAdmin');
});
Route::get('/kelolaAdmin-superAdmin', function () {
    return view('pages/superAdmin/kelolaAdmin-superAdmin');
});
Route::get('/editAdmin-superAdmin', function () {
    return view('pages/superAdmin/editAdmin-superAdmin');
});
Route::get('/tambahAdmin-superAdmin', function () {
    return view('pages/superAdmin/tambahAdmin-superAdmin');
});
Route::get('/transaksi-superAdmin', function () {
    return view('pages/superAdmin/transaksi-superAdmin');
});
Route::get('/detailTransaksi-superAdmin', function () {
    return view('pages/superAdmin/detailTransaksi-superAdmin');
});

//admin
Route::get('/login-admin', function () {
    return view('pages/admin/login-admin');
});
Route::get('/dashboard-admin', function () {
    return view('pages/admin/dashboard-admin');
});
Route::get('/kamar-admin', function () {
    return view('pages/admin/kamar-admin');
});
Route::get('/detailKamar-admin', function () {
    return view('pages/admin/detailKamar-admin');
});
Route::get('/detailPemesananKamar-admin', function () {
    return view('pages/admin/detailPemesananKamar-admin');
});
Route::get('/transaksi-admin', function () {
    return view('pages/admin/transaksi-admin');
});
Route::get('/riwayatTransaksi-admin', function () {
    return view('pages/admin/riwayatTransaksi-admin');
});
Route::get('/detailRiwayatTransaksi-admin', function () {
    return view('pages/admin/detailRiwayatTransaksi-admin');
});
Route::get('/laundry-admin', function () {
    return view('pages/admin/laundry-admin');
});
Route::get('/pemesananLaundry-admin', function () {
    return view('pages/admin/pemesananLaundry-admin');
});
Route::get('/detailLaundry-admin', function () {
    return view('pages/admin/detailLaundry-admin');
});
Route::get('/karyawan-admin', function () {
    return view('pages/admin/karyawan-admin');
});
Route::get('/tambahKaryawan-admin', function () {
    return view('pages/admin/tambahKaryawan-admin');
});
Route::get('/editKaryawan-admin', function () {
    return view('pages/admin/editKaryawan-admin');
});
Route::get('/detailKaryawan-admin', function () {
    return view('pages/admin/detailKaryawan-admin');
});
Route::get('/gajiKaryawan-admin', function () {
    return view('pages/admin/gajiKaryawan-admin');
});
Route::get('/tambahGajiKaryawan-admin', function () {
    return view('pages/admin/tambahGajiKaryawan-admin');
});
Route::get('/editGajiKaryawan-admin', function () {
    return view('pages/admin/editGajiKaryawan-admin');
});

//karyawan
Route::get('/login-karyawan', function () {
    return view('pages/karyawan/login-karyawan');
});
Route::get('/lupaSandi-karyawan', function () {
    return view('pages/karyawan/lupaSandi-karyawan');
});
Route::get('/verifikasi-karyawan', function () {
    return view('pages/karyawan/verifikasi-karyawan');
});
Route::get('/sandiBaru-karyawan', function () {
    return view('pages/karyawan/sandiBaru-karyawan');
});
Route::get('/profilData-karyawan', function () {
    return view('pages/karyawan/profilData-karyawan');
});
Route::get('/editData-karyawan', function () {
    return view('pages/karyawan/editData-karyawan');
});
Route::get('/tunjangan-karyawan', function () {
    return view('pages/karyawan/tunjangan-karyawan');
});
Route::get('/dokumen-karyawan', function () {
    return view('pages/karyawan/dokumen-karyawan');
});