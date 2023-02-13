<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    protected $table = "transaksi";
    public $timestamps = FALSE;

    protected $guarded = [];

    public function detail()
    {
        return $this->hasMany(detailTransaksi::class, 'transaksi_id', 'id');
    }
}
