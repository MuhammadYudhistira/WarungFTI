<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_Penjualan extends Model
{
    use HasFactory;
    protected $table = "detail_penjualan";

    public function Penjualan(){
        return $this->belongsTo(Penjualan::class);
    }

    public function Barang(){
        return $this->belongsTo(Barang::class);
    }
}
