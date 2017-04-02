<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function getIndex() 
    {
        return view('pages.learnLanding');
    }
    
     function postLandingSubmit() 
    {
        return view('pages.landingSubmit');
    }
}
