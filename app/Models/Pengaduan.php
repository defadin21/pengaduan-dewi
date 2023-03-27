<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nama',
        'isi_laporan',
        'status',
    ];

    public function user(){
        return $this->belongsTo('App\Models\User','user_id');
    }
}