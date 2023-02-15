<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailTransaksi extends Model
{
    use HasFactory;
    protected $table = "detail_transaksi";
    public $timestamps = FALSE;

    protected $guarded = [];

    public function transaksi()
    {
        return $this->belongsTo(transaksi::class);
    }

    public function telur()
    {
        return $this->belongsTo(telur::class);
    }

    public function detail_telur()
    {
        return $this->hasMany(telur::class);
    }


}
