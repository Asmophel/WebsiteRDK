<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nominal', 'tanggal_donasi', 'keterangan', 'user_id',
    ];

    public function user (){
        return $this->belongsTo(User::class);
    }
}
