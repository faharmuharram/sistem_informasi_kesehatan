<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MObatJenis;
use Redirect;

class MasterObatController extends Controller
{
    public function view_obat()
    {
        return view('m_obat');
    }
    public function view_jenis_obat()
    {
        return view('m_jenis_obat');
    }

    public function view_add_jenis_obat()
    {
        return view('m_jenis_obat_add');
    }

    public function add_jenis_obat(Request $request)
    {
        $request->validate([
            'kode' => 'required',
            'nama' => 'required'
        ]);

        MObatJenis::create([
            'kode' => $request->kode,
            'nama' => $request->nama,
        ]);

        return Redirect::route('view_m_jenis_obat');
    }
}