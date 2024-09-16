<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sitesetting;
use App\Models\Aboutus;
use App\Models\Banner;
use App\Models\Contact;
use App\Models\Client;
use App\Models\Special;

class HomeController extends Controller
{
    public function Home(){
        $sitesetting=Sitesetting::orderBy('id','desc')->first();
        $banner=Banner::orderBy('id','desc')->first();
        $getcontact=Contact::orderBy('id','desc')->first();
        $client=Client::orderBy('id','desc')->get();
        $special=Special::orderBy('id','desc')->get();
        return view('frontend.index',compact('sitesetting','banner','getcontact','client','special'));
    }

    public function Aboutus($id){
        $aboutus=Aboutus::findorfail($id);
        // $getbanner=Banner::orderBy('id','desc')->first();
        // $getcontact=Contact::orderBy('id','desc')->first();
        return view('frontend.index',compact('aboutus'));
    }
}
