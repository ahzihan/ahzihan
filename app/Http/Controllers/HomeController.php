<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function Page(Request $request){
        return view('pages.home');
    }

    function HeroData(Request $request){
        return DB::table('heroproperties')->first();
    }

    function AboutData(Request $request){
        return DB::table('abouts')->first();
    }

    function SocialData(Request $request){
        return DB::table('socials')->first();
    }
}
