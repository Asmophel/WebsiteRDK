<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Post extends Model
{
    use HasFactory;
 
    protected $fillable = [
        'id', 'title', 'waktu_acara', 'content', 'user_id', 'tipe',
    ];

    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    public function image () {
        return $this->hasMany(Photo::class);
    }
}