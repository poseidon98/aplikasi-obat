<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;
    protected $table = 'medicines';


    protected $fillable = [
        'kode_obat',
        'nama_obat',
        'stok',
        'satuan_obat',
        'jenis_barang',
        'harga_beli',
        'harga_jual',
        'tgl_kadaluarsa',
        'user',
    ];
}
