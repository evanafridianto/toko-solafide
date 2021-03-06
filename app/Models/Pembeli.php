<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    // use HasFactory;

    protected $table = 'pembeli';
    protected $primaryKey = 'id_pembeli';

    protected $fillable =  [
        'nama_pembeli', 'jk', 'no_telp', 'alamat'
    ];

    // relasi antara tb pembeli ke tb transaksi
    public function transaksi()
    {
        return $this->hasMany('App\Models\Transaksi');
    }
}