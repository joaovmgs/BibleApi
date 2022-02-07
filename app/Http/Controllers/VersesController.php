<?php

namespace App\Http\Controllers;

use App\Http\Resources\ChaptersResource;
use App\Http\Resources\VersesResource;
use App\Models\Books;
use App\Models\Verses;
use Illuminate\Http\Request;

class VersesController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return BooksResource::collection(Books::all());
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
    public function show($version,$book,$chapters,$verse)
    {
          
        $book = Books::where('abbreviation',$book)->first();



        return new ChaptersResource(Verses::where('capitulo', $chapters)->where('verse', $verse)->where('bookId', $book->bookId)->whereHas('Versions', function ($query) use ($version) {
            return $query->where('abbreviation', '=', $version);
        })->with(['Versions','Books'])->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
