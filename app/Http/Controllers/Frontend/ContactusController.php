<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sitesetting;
use App\Models\Contact;
use App\Models\Client;
use App\Models\Special;

class ContactusController extends Controller
{
    public function Contact(){
        $sitesetting=Sitesetting::orderBy('id','desc')->first();
        $contact=Contact::orderBy('id','desc')->first();
        return view('frontend.content.contact',compact('contact','sitesetting'));
    }

    public function testimonial(){
        $sitesetting=Sitesetting::orderBy('id','desc')->first();
        $client=Client::orderBy('id','desc')->get();
        return view('frontend.content.testimonial',compact('client','sitesetting'));
    }

    public function special(){
        $sitesetting=Sitesetting::orderBy('id','desc')->first();
        $special=Special::orderBy('id','desc')->get();
        return view('frontend.content.special',compact('special','sitesetting'));
    }
}
