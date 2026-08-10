<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenggunaanBahanController extends Controller
{
    public function index()
    {
        return view('penggunaan_bahan.index');
    }
}