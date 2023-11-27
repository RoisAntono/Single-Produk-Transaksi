<?php

namespace App\Models;

use App\Models\Pemasok;
use App\Models\Transaksi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //Relasi tabel Pemasok
    public function pemasok()
    {
        return $this->belongsTo(Pemasok::class);
    }

    //Relasi tabel Transaksi
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}
