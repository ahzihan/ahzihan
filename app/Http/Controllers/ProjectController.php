<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    function Page(Request $request){
        return view('pages.project');
    }

    function ProjectData(Request $request){
        return DB::table('projects')->get();
    }
}
