<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $primaryKey = 'idtransaksi';
    public $timestamps = false;

    protected $fillable = [
        'jenistransaksi',
        'jumlah',
        'keterangan'
    ];
}
