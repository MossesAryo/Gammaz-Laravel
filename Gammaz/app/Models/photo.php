<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class photo extends Model
{
    use HasFactory;

    protected $table = 'foto'; 

    protected $fillable = [
        'AlbumID', 'UserID','JudulFoto', 'DeskripsiFoto', 'LokasiFoto', 
    ];

    public function album()
    {
        return $this->belongsTo(Album::class, 'AlbumID');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'UserID');
    }

    public function comments()
    {
        return $this->hasMany(PhotoComment::class, 'FotoID');
    }

    public function likes()
    {
        return $this->hasMany(PhotoLike::class, 'FotoID');
    }

}
