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

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('home');
});
Route::get('/lang/{lang}', function ($lang) {
    Session::put('applocale', $lang);
    return back();
});

Route::post('/send-contact-email',function(){
    Mail::to(['itsme@theyounus.com','jagdish@s14advisory.com'])->send(new \App\Mail\SendContact(request()->all()));
    return response("Thanks for contacting us");
});

Route::get('/our-clients', 'ClientsController@index');
Route::post('/our-clients', 'ClientsController@store');

Route::get('/team', function () {
    return view("team.index")->with([
        'team' => config('constants.team')
    ]);
});

Route::get('/team/{slug}', function ($slug) {
    if (!array_key_exists($slug, config('constants.team')))
        abort(404);
    return view('team.show', [
        'person' => config('constants.team.' . $slug),
        'slug' => $slug
    ]);
});


