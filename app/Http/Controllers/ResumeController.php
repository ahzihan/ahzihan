<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResumeController extends Controller
{
    function Page(Request $request){
        return view('pages.resume');
    }

    function ExperienceData(Request $request){
        return DB::table('experiences')->get();
    }

    function ResumeLink(Request $request){
        return DB::table('resumes')->first();
    }

    function EducationData(Request $request){
        return DB::table('educations')->get();
    }

    function SkillData(Request $request){
        return DB::table('skills')->get();
    }

    function Language(Request $request){
        return DB::table('languages')->get();
    }


}
