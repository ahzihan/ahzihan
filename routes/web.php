<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ResumeController;


//Page Route
Route::get('/', [HomeController::class, 'Page'] )->name('home');
Route::get('/contact', [ContactController::class, 'Page'] )->name('contact');
Route::get('/project', [ProjectController::class, 'Page'] )->name('project');
Route::get('/resume', [ResumeController::class, 'Page'] )->name('resume');


//Ajax Call Route
Route::get('/heroData', [HomeController::class, 'HeroData']);
Route::get('/aboutData', [HomeController::class, 'AboutData']);
Route::get('/socialData', [HomeController::class, 'SocialData']);
Route::get('/projectData', [ProjectController::class, 'ProjectData']);
Route::get('/resumeLink', [ResumeController::class, 'ResumeData']);
Route::get('/experienceData', [ResumeController::class, 'ExperienceData']);
Route::get('/skillData', [ResumeController::class, 'SkillData']);
Route::get('/educationData', [ResumeController::class, 'EducationData']);
Route::get('/languageData', [ResumeController::class, 'LanguageData']);
Route::post('/contactRequest', [ResumeController::class, 'ContactRequest']);
