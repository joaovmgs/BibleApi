<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TwitterController extends Controller
{
    static function countWords($text){
        return str_word_count($text);
    }

    public function twitter($text){
        
    }
}
