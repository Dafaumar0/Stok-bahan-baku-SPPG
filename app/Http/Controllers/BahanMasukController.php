<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BahanMasukController extends Controller
{
    public function index()
    {
        return view('bahan_masuk.index');
    }
}