<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\sitesetting;
use App\Models\Aboutus;
use App\Models\Menu;

class AboutusController extends Controller
{
    // public function aboutus(){
    //     $sitesetting=Sitesetting::orderBy('id','desc')->first();
    //     // $getaboutus=Aboutus::orderBy('id','desc')->first();
    //     return view('frontend.content.aboutus',compact('sitesetting'));
    // }

    public function service(){
        $sitesetting=Sitesetting::orderBy('id','desc')->first();
        return view('frontend.content.service',compact('sitesetting'));
    }

    public function menu(){
        $sitesetting=Sitesetting::orderBy('id','desc')->first();
        $getmenu=Menu::orderBy('id','desc')->get();
        return view('frontend.content.menu',compact('sitesetting','getmenu'));
    }
}
