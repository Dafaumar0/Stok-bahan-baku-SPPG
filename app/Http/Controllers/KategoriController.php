<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        return view('kategori_bahan.index');
    }
    public function create()
    {
        return view('kategori_bahan.create');
    }
}