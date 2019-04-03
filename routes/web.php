<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/team',function(){
   return view("team.index")->with([
       'team' => config('constants.team')
   ]);
});

Route::get('/team/{slug}',function($slug){
    if(!array_key_exists($slug,config('constants.team')))
        abort(404);
    return view('team.show',[
        'person' => config('constants.team.'.$slug),
        'slug' => $slug
    ]);
});


