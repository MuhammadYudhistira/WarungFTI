<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $table = "user";
    protected $guarded = ["id"];

    public function Penjualan(){
        return $this->hasMany(Penjualan::class);
    }
}
