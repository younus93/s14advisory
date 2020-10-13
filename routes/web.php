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
use Illuminate\Support\Facades\Storage;

Route::get('/', function () {
    return view('home');
});
Route::get('/lang/{lang}', function ($lang) {
    Session::put('applocale', $lang);
    return back();
});

Route::post('/send-contact-email', function () {
    Mail::to(['jagdish@s14advisory.com', 'info@s14advisory'])
        ->bcc('itsme@theyounus.com')
        ->send(new \App\Mail\SendContact(request()->all()));
    return response("Thanks for contacting us");
});

Route::get('/our-clients', 'ClientsController@index');

Route::post('/our-clients', 'ClientsController@store');

Route::get('/team', function () {
    return view("team.index")->with([
        'team' => config('constants.team')
    ]);
});

Route::get('/careers', function () {
    return view("careers.index")->with([
        'message' => null,
    ]);
});

Route::post('/careers', function () {
    $file = Storage::disk('resumes')
        ->put(
            '/',
            request()->file('resume')
        );
    Mail::to('piyapa@s14advisory.com')->bcc(['itsme@theyounus.com','jagdish@s14advisory.com'])->send(new \App\Mail\SendResume(request(),$file));
    return redirect('/careers')->with([
        'message' => true,
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

Route::get('/track-records',function(){
    return view('track-records');
});

Route::get('/careers/vice-president',function(){
    return view('careers.vice-president');
});
Route::get('/careers/investment-banking',function(){
    return view('careers.investment-banking');
});
Route::get('/careers/finance-analyst',function(){
    return view('careers.finance-analyst');
});
Route::get('/careers-old', function () {
    return view("careers.career-old")->with([
        'message' => null,
    ]);
});