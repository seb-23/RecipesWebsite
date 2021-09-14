<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecipesController extends Controller
{

    public function index()
    {
        return view('recipes.index', ['recipes' => Auth::user()->recipes]);
    }

    public function create()
    {
        return view('recipes.create-or-update', ['formAction' => 'create']);
    }

    public function show(Recipe $recipe)
    {
        return view('recipes.show', ['recipe' => $recipe]);
    }

    public function edit(Recipe $recipe)
    {
        return view('recipes.create-or-update', ['recipe' => $recipe, 'formAction' => 'update']);
    }

    public function public()
    {
        $recipes = Recipe::latest()->get();

        return view('recipes.public', ['recipes' => $recipes]);
    }

    public function destroy(Recipe $recipe)
    {
        $recipe->delete();

        return redirect()->route('recipes.index');
    }
}
