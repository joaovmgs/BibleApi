<?php

namespace App\Http\Controllers;

use App\Http\Resources\ChaptersResource;
use App\Http\Resources\VersesResource;
use App\Models\Books;
use App\Models\Verses;
use Illuminate\Http\Request;

class VersesController extends Controller
{
  
    public function show($version,$book,$chapters,$verse)
    {
          
        $book = Books::where('abbreviation',$book)->first();

        return new ChaptersResource(Verses::where('capitulo', $chapters)->where('verse', $verse)->where('bookId', $book->bookId)->whereHas('Versions', function ($query) use ($version) {
            return $query->where('abbreviation', '=', $version);
        })->with(['Versions','Books'])->first());

    }

    public function versesInterval($version,$book,$chapters,$openingVerse,$lastVerse){

        $book = Books::where('abbreviation',$book)->first();

        return  ChaptersResource::collection(Verses::where('capitulo', $chapters)->where('verse' , '>=', $openingVerse)->where('verse' , '<=', $lastVerse)->where('bookId', $book->bookId)->whereHas('Versions', function ($query) use ($version) {
            return $query->where('abbreviation', '=', $version);
        })->with(['Versions','Books'])->get());

    }


}
