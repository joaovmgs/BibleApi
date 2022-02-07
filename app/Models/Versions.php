<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Versions extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'versionId',
        'name',
        'abbreviation'
    ];

    public function Verses()
    {
        return $this->hasMany(Verses::class,'versionId','versionId');
    }

}
