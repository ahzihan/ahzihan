<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    function Page(Request $request){
        return view('pages.contact');
    }

    function ContactRequest(Request $request){

        return DB::table('contacts')->insert($request->input());
    }
}
