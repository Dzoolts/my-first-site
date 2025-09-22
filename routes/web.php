<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\PostController;

Route::get('/', function () {
    //return view('welcome');
    $username = 'John';
        /*return view('welcome', [
            'name' => $username,
            'day' =>"Hétfő",
            'number' =>1,
            'logikai'=>false
    ]);*/
    return view('welcome')->withName($username)->withDay('Hétfő')
    ->withNumber(1)->withLogikai(true);
});

Route::get('/pass-array',function (){
    $tasks=[
        'Elmenni a boltba.',
        'Elmenni a piacra.',
        'Elmenni a munkahelyre.'
    ];

    /*return view('taskslist',[
        'tasks'=>$tasks
    ]);*/
    //return view('taskslist')->withTasks($tasks);

    return view('taskslist')->with([
        'tasks'=>$tasks,
    ]);
});



Route::view('/contact', 'contact');

Route::get('/request-test', function(){
    return view('request-inputs')->with([
        'title'=>request('title')
    ]);
});

/*Route::get('/posts/{post}',function($post){
    $posts=[
        'first-post'=>"Ez az első postom nagyon jó poszt!",
        'second-post'=>"Ez a második posztom ez nem jobb mint az első."
    ];
    if (!array_key_exists($post,$posts)){
        abort(404);
    }
    return view('post')->with([
        'post'=>$posts[$post] ?? "ez még nem létezik."
    ]);
});*/

Route::get('/posts/{posts}',[PostController::class,'show']);
