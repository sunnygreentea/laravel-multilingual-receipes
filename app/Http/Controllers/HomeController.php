<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Recipe;

class HomeController extends Controller
{
    public function index ($locale) 
    {
        echo "PPPPPPP";
		return view('home', compact('locale'));
    }
}
