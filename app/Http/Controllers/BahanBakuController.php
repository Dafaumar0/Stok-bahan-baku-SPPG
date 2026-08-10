<?php

namespace App\Http\Controllers;

use App\Models\BahanBaku;
use App\Models\Kategori;
use App\Models\Supplier;
use Illuminate\Http\Request;

class BahanBakuController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
        'search' => 'nullable|string'
    ]);

    $bahanBaku = BahanBaku::query()
        ->when($request->filled('search'), function ($query) use ($request) {
            $query->where('kode_bahan', 'like', '%' . $request->search . '%')
                  ->orWhere('nama_bahan', 'like', '%' . $request->search . '%');
        })
        ->latest()
        ->paginate(10);
        return view('bahan_baku.index', compact('bahanBaku'));
    }


    public function create()
    {
        $kategori=Kategori::all();
        $supplier=Supplier::all();
        return view('bahan_baku.create', compact('kategori','supplier'));

    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode_bahan' => 'required|string|max:50|unique:bahan_baku,kode_bahan',
            'nama_bahan' => 'required|string|max:255',
            'kategori_id' => 'required|exists:kategori,id',
            'supplier_id' => 'required|exists:supplier,id',
            'stok' => 'required|integer|min:0',
            'satuan' => 'required|string|max:50',
            'harga' => 'required|numeric|min:0',
        ]);

        BahanBaku::create($validated);

        return redirect()
            ->route('bahan-baku.index')
            ->with('success', 'Data bahan baku berhasil ditambahkan');
    }
}