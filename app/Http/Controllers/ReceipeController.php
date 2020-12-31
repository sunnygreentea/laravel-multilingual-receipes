<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Receipe;

class ReceipeController extends Controller
{


    public function index ($locale) 
    {
    	$receipes = Receipe::all();
    	foreach($receipes as $receipe) {
    		$title_lang = "title_".$locale;
    		$receipe->title = $receipe->$title_lang;
    	}
		return view('receipes', compact('locale', 'receipes'));
    }

    public function receipe ($locale, $id) 
    {
    	$receipe = Receipe::find($id);
    	
    	$title_lang = "title_".$locale;
    	$receipe->title = $receipe->$title_lang;
    	$ingredients_lang = "ingredients_".$locale;
    	$receipe->ingredients = $receipe->$ingredients_lang;
    	$directions_lang = "directions_".$locale;
    	$receipe->directions = $receipe->$directions_lang;

    	return view('receipe', compact('locale', 'receipe'));
    }
}
