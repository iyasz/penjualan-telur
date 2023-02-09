<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class jenis_telur extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "jenis_telur";
    public $timestamps = FALSE;

    protected $guarded = [];
}
