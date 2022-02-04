<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Verses extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'verseId',
        'text',
        'verse',
        'versionId',
        'bookId',
        'testamentId'
    ];

    public function Versions()
    {
        return $this->belongsTo(Versions::class,'versionId','versionId');
    }

    public function Testaments()
    {
        return $this->belongsTo(Testaments::class,'testamentId','testamentId');
    }

    public function Books()
    {
        return $this->belongsTo(Books::class,'bookId','bookId');
    }

}
