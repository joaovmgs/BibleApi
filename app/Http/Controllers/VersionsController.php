<?php

namespace App\Http\Controllers;

use App\Http\Resources\VersionsResource;
use App\Models\Versions;
use Illuminate\Http\Request;

class VersionsController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return VersionsResource::collection(Versions::all());
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($abbrev)
    {
        return new VersionsResource(Versions::where('abbreviation', $abbrev)->firstOrFail());
    }


}
