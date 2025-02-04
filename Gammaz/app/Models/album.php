<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class album extends Model
{
    use HasFactory;

    protected $table = 'album'; 

    protected $fillable = [
        'NamaAlbum', 'Deskripsi', 'TanggalDibuat', 'UserID'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'UserID');
    }

    public function photos()
    {
        return $this->hasMany(photo::class, 'AlbumID');
    }
}
