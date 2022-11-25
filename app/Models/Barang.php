<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = "barang";
    protected $guarded = ["id"];

    public function Detail_Penjualan(){
        return $this->hasMany(Detail_Penjualan::class);
    }
    public function Detail_Pembelian(){
        return $this->hasMany(Detail_Pembelian::class);
    }
}
