<?php

namespace App\Http\Controllers;

use App\Mail\SendOTP;
use App\WebsiteVisitors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ClientsController extends Controller
{

    public function index()
    {
        $visitor = null;
        if (request()->has('email') && request()->has('otp')) {
            $currentVisitor = WebsiteVisitors::whereEmail(request('email'))->where('otp', request('otp'))->first();
            if (!$currentVisitor->otp_used_at) {
                $visitor = $currentVisitor;
                $visitor->update([
                    'otp_used_at' => now(),
                ]);
            }
        }
        return view("clients.index")->with([
            'visitor' => $visitor
        ]);
    }

    public function store(Request $request)
    {
        $visitor = WebsiteVisitors::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'otp' => random_int(0, 9999)
        ]);
        Mail::to($visitor->email)->send(new SendOTP($visitor));
        return response('Email Sent');
    }

}
