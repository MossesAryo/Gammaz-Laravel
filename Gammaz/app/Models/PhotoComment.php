<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PhotoComment extends Model
{
    use HasFactory;

    protected $table = 'komentarfoto'; // Ensure it matches the table name

    protected $fillable = [
        'FotoID', 'UserID', 'IsiKomentar', 'TanggalKomentar'
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
