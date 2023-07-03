<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function datatable()
    {
        return view('datatable');
    }
    public function viewtambahkaryawan()
    {
        return view('tambah-karyawan');
    }
    public function tambahkaryawan(Request $r)
    {
        $ky = new Karyawan();
        $ky->nama = $r->nama;
        $ky->divisi_id = $r->divisi;
        $ky->save();
        return redirect('/dashboard');
    }
    public function lihatdash()
    {
        $ky = Karyawan::with('divisi')->get();

        return view('dashboard', compact('ky'));
    }
    public function vieweditkaryawan($id)
    {
        $k = Karyawan::find($id);
        return view('formeditkaryawan', compact('k'));
    }
    public function updatekaryawan(Request $r)
    {
        $ky = Karyawan::find($r)
        $ky->nama = $r->nama;
        $ky->divisi_id = $r->divisi;
        $ky->save();
        return redirect('/dashboard');
    }
    
}
