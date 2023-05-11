<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
    use HasFactory;

    protected $table = 'produksi';

    protected $fillable = ['kode_produk', 'nama_produk', 'jumlah_produksi', 'tanggal_produksi'];

    public function bahanbaku()
    {
        return $this->belongsToMany(Material::class);
    }

    public function pengiriman()
    {
        return $this->hasMany(Delivery::class);
    }
}