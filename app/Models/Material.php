<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $table = 'bahan_baku';
    protected $fillable = [
        'nama_bahan',
        'jumlah_stok',
    ];
    
    
    public function produksi()
    {
        return $this->belongsToMany(Production::class);
    }
}
