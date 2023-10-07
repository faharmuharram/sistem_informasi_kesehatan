<?php

namespace App\Http\Controllers;

use App\Models\MBidan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MasterBidanController extends Controller
{
    public function view()
    {
        $datas = DB::select('Select * From m_bidan');
        // echo "<pre>";
        // die(var_dump($data));

        return view('m_bidan', compact('datas'));
    }
    public function add()
    {
        return view('m_bidan_add');
    }
}