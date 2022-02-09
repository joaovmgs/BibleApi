<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TwitterController extends Controller
{
    static function countWords($text){
        return strlen($text);
    }

    public function twitter(){
        $verse = new VersesController();
        $verse = $verse->drawRandomVerse();
        
        $i = false;
        while ($i == false) {
            
            if(TwitterController::countWords($verse->text) < 280){
                $i = true;
            }

        }


        return response()->json([
            'val' => TwitterController::countWords($verse->text),
            'text' => $verse->text
        ], 418); 

    }
}
