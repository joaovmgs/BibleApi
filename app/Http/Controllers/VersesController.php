<?php

namespace App\Http\Controllers;

use App\Http\Resources\ChaptersResource;
use App\Models\Books;
use App\Models\Verses;

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

        $verses =  ChaptersResource::collection(Verses::where('capitulo', $chapters)->where('verse' , '>=', $openingVerse)->where('verse' , '<=', $lastVerse)->where('bookId', $book->bookId)->whereHas('Versions', function ($query) use ($version) {
            return $query->where('abbreviation', '=', $version);
        })->with(['Versions','Books'])->get());



        return response()->json([
            'occurrence' => $verses->count(),
            'version' => $version,
            'verses' => $verses
        ], 418); 
    }

    public function drawRandomVerse(){

        $book = Books::all()->random(1);


        $verses =  new ChaptersResource(Verses::where('bookId', $book[0]->bookId)->whereHas('Versions', function ($query) {
            return $query->where('abbreviation', '=', 'nvi');
        })->with(['Versions','Books'])->inRandomOrder()->first());

        return $verses;
        
    }

}
