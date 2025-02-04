<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PhotoLike extends Model
{
    use HasFactory;

    protected $table = 'likefoto'; 

    protected $fillable = [
        'FotoID', 'UserID', 'TanggalLike'
    ];

    public function photo()
    {
        return $this->belongsTo(Photo::class, 'FotoID');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'UserID');
    }
}
