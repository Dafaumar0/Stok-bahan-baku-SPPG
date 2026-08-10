<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        return view('supplier_bahan.index');
    }

    public function create()
    {
        return view('supplier_bahan.create');
    }
}