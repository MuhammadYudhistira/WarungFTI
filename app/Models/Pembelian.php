<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;
    protected $table = "pembelian";
    protected $guarded = ["id"];

    public function Detail_Pembelian(){
        return $this->hasMany(Detail_Pembelian::class);
    }
}
