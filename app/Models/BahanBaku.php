<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BahanBaku extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'bahan_baku';

    public function kategori()
    {
        $this->belongsTo(Kategori::class, 'kategori_id');
    }

    public function supplier()
    {
        $this->belongsTo(Supplier::class, 'supplier_id');
    }
}
