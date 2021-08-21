<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Main;
use App\About;
use App\Experience;
use App\Portfolio;
use App\Resume;
use App\Me;

class PagesController extends Controller
{
    public function index(){
        $main = Main::first();     
        $about = About::all();   
        $portfolios = Portfolio::all();   
        $resume = Resume::all();   
        $experience = Experience::all();   
        $me = Me::all();   
        return view('pages.index', compact('main','about','portfolios','resume','experience','me'));            
    }
    
}
