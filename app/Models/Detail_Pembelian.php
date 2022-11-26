<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_Pembelian extends Model
{
    use HasFactory;
    protected $table = "detail_pembelian";

    public function Barang(){
        return $this->belongsTo(Barang::class);
    }

    public function Pembelian(){
        return $this->belongsTo(Pembelian::class);
    }
}
