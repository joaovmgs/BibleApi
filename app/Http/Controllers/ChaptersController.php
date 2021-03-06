<?php

namespace App\Http\Controllers;

use App\Http\Resources\ChaptersResource;
use App\Models\Books;
use App\Models\Verses;
use App\Models\Versions;
use Illuminate\Http\Request;

class ChaptersController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($version,$book,$chapters)
    {
  
        $book = Books::where('abbreviation',$book)->first();



        $chapters = ChaptersResource::collection(Verses::where('capitulo', $chapters)->where('bookId', $book->bookId)->whereHas('Versions', function ($query) use ($version) {
            return $query->where('abbreviation', '=', $version);
        })->with(['Versions','Books'])->get());



        return response()->json([
            'occurrence' => $chapters->count(),
            'version' => $version,
            'verses' => $chapters
        ], 418); 


    }


}
