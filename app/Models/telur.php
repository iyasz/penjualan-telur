<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class telur extends Model
{
    use HasFactory;
    protected $table = "telur";
    public $timestamps = FALSE;

    protected $guarded = [];
    

    public function jenis_telur()
    {
        return $this->belongsTo(jenis_telur::class);
    }
}
