<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterPasienController extends Controller
{
    public function view()
    {
        return view('m_pasien');
    }
}