<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sitesetting;
use App\Models\Contact;

class ContactusController extends Controller
{
    public function Contact(){
        $sitesetting=Sitesetting::orderBy('id','desc')->first();
        $contact=Contact::orderBy('id','desc')->first();
        return view('frontend.content.contact',compact('contact','sitesetting'));
    }
}