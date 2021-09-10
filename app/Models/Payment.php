<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $table = 'payments';
    protected $fillable = [
        'kode_pembelian',
        'nama_pasien',
        'nama_obat',
        'qty',
        'harga_satuan',
        'total_harga',
        'user',
    ];
}
