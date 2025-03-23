<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class GeneralPage extends Controller
{
    // super admin
    function LoginSuperAdmin()
    {
        return view('pages/superAdmin/login-superAdmin');
    }
    function FormLoginSuperAdmin()
    {
        return view('pages/superAdmin/formLogin-superAdmin');
    }
    function DashboardSuperAdmin()
    {
        return view('pages/superAdmin/dashboard-superAdmin');
    }
    function KategoriSuperAdmin()
    {
        return view('pages/superAdmin/kategori-superAdmin');
    }
    function KamarSuperAdmin()
    {
        return view('pages/superAdmin/kamar-superAdmin');
    }
    function KelolaAdminSuperAdmin()
    {
        return view('pages/superAdmin/kelolaAdmin-superAdmin');
    }
    function EditAdminSuperAdmin()
    {
        return view('pages/superAdmin/editAdmin-superAdmin');
    }
    function TambahAdminSuperAdmin()
    {
        return view('pages/superAdmin/tambahAdmin-superAdmin');
    }
    function TransaksiSuperAdmin()
    {
        return view('pages/superAdmin/transaksi-superAdmin');
    }
    function DetailTransaksiSuperAdmin()
    {
        return view('pages/superAdmin/detailTransaksi-superAdmin');
    }

    // admin
    function LoginAdmin()
    {
        return view('pages/admin/login-admin');
    }
    function DashboardAdmin()
    {
        return view('pages/admin/dashboard-admin');
    }
    function KamarAdmin()
    {
        return view('pages/admin/kamar-admin');
    }
    function DetailKamarAdmin()
    {
        return view('pages/admin/detailKamar-admin');
    }
    function DetailPemesananKamarAdmin()
    {
        return view('pages/admin/detailPemesananKamar-admin');
    }
    function TransaksiAdmin()
    {
        return view('pages/admin/transaksi-admin');
    }
    function RiwayatTransaksiAdmin()
    {
        return view('pages/admin/riwayatTransaksi-admin');
    }
    function DetailRiwayatTransaksiAdmin()
    {
        return view('pages/admin/detailRiwayatTransaksi-admin');
    }
    function PemesananLaundryAdmin()
    {
        return view('pages/admin/pemesananLaundry-admin');
    }
    function DetailLaundryAdmin()
    {
        return view('pages/admin/detailLaundry-admin');
    }
    function LaundryAdmin()
    {
        return view('pages/admin/laundry-admin');
    }
    function KaryawanAdmin()
    {
        return view('pages/admin/karyawan-admin');
    }
    function TambahKaryawanAdmin()
    {
        return view('pages/admin/tambahKaryawan-admin');
    }
    function EditKaryawanAdmin()
    {
        return view('pages/admin/editKaryawan-admin');
    }
    function DetailKaryawanAdmin()
    {
        return view('pages/admin/detailKaryawan-admin');
    }
    function GajiKaryawanAdmin()
    {
        return view('pages/admin/gajiKaryawan-admin');
    }
    function TambahGajiKaryawanAdmin()
    {
        return view('pages/admin/tambahGajiKaryawan-admin');
    }
    function EditGajiKaryawanAdmin()
    {
        return view('pages/admin/editGajiKaryawan-admin');
    }

    //karyawan
    function LoginKaryawan()
    {
        return view('pages/karyawan/login-karyawan');
    }
    function LupaSandiKaryawan()
    {
        return view('pages/karyawan/lupaSandi-karyawan');
    }
    function VerifikasiKaryawan()
    {
        return view('pages/karyawan/verifikasi-karyawan');
    }
    function SandiBaruKaryawan()
    {
        return view('pages/karyawan/sandiBaru-karyawan');
    }
    function ProfilDataKaryawan()
    {
        return view('pages/karyawan/profilData-karyawan');
    }
    function EditDataKaryawan()
    {
        return view('pages/karyawan/editData-karyawan');
    }
    function TunjanganKaryawan()
    {
        return view('pages/karyawan/tunjangan-karyawan');
    }
    function DokumenKaryawan()
    {
        return view('pages/karyawan/dokumen-karyawan');
    }

}