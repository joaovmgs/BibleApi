<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;
    protected $primaryKey = "bookId";
    public $timestamps = false;

    protected $fillable = [
        'bookId',
        'position',
        'name',
        'abbreviation',
        'testamentId'
    ];

    public function Verses()
    {
        return $this->hasMany(Verses::class,'bookId','bookId');
    }

}
