<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Recipe;

class RecipeController extends Controller
{


    public function index ($locale) 
    {
    	$recipes = Recipe::all();
        //dd($recipes);
    	foreach($recipes as $recipe) {
    		$title_lang = "title_".$locale;
    		$recipe->title = $recipe->$title_lang;
    	}
		return view('recipes', compact('locale', 'recipes'));
    }

    public function recipe ($locale, $id) 
    {
    	$recipe = Recipe::find($id);
    	
    	$title_lang = "title_".$locale;
    	$recipe->title = $recipe->$title_lang;
    	$ingredients_lang = "ingredients_".$locale;
    	$recipe->ingredients = $recipe->$ingredients_lang;
    	$directions_lang = "directions_".$locale;
    	$recipe->directions = $recipe->$directions_lang;

    	return view('recipe', compact('locale', 'recipe'));
    }
}
