<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testaments extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'testamentId',
        'name',
        'abbreviation'
    ];


    public function Verses()
    {
        return $this->hasMany(Verses::class,'testamentId','testamentId');
    }
}
