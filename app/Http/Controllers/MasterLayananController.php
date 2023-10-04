<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterLayananController extends Controller
{
    public function view()
    {
        return view('m_layanan');
    }
    public function view_jenis()
    {
        return view('m_jenis_layanan');
    }
}