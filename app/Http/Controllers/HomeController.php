<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Receipe;

class HomeController extends Controller
{
    public function index ($locale) 
    {
		return view('home', compact('locale'));
    }
}
