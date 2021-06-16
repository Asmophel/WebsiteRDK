<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class AmalYaumi extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsToMany(User::class)->withPivot(
            'Tanggal_amalyaumi',
        );
    }
  
}
