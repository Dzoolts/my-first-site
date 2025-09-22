<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //get kéréshez tartozo function

    public function show($post){
        //dd($post);


    if (!array_key_exists($post,$posts)){
        abort(404);
    }

    return view('post')->with([
        'post'=>$posts[$post]??"Ez még nem létezik."
    ]);

    }
}
