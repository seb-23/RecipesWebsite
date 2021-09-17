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
        $recipes = isset($_GET['search']) ? $this->searchUser()  : Auth::user()->recipes;

        return view('recipes.index', ['recipes' => $recipes]);
    }

    public function create()
    {
        return view('recipes.create-or-update', ['formAction' => 'create']);
    }

    public function show(Recipe $recipe)
    {
        $this->forbidden($recipe);
        return view('recipes.show', ['recipe' => $recipe, 'actions' => true]);
    }

    public function showRestricted(Recipe $recipe)
    {
        return view('recipes.show', ['recipe' => $recipe]);
    }

    public function edit(Recipe $recipe)
    {
        $this->forbidden($recipe);
        return view('recipes.create-or-update', ['recipe' => $recipe, 'formAction' => 'update']);
    }

    public function public()
    {
        $recipes = isset($_GET['search']) ? $this->search()  : Recipe::latest()->get();

        return view('recipes.public', ['recipes' => $recipes]);
    }

    public function destroy(Recipe $recipe)
    {
        $recipe->delete();

        return redirect()->route('recipes.index');
    }

    private function search()
    {
        $search_text = $_GET['search'];
        return Recipe::where('title', 'LIKE', '%'.$search_text.'%')->get();
    }

    private function searchUser()
    {
        $search_text = $_GET['search'];
        return Recipe::where('user_id', Auth::id())
            ->where('title', 'LIKE', '%'.$search_text.'%')
            ->get();
    }

    private function forbidden(Recipe $recipe)
    {
        if ($recipe->user_id != Auth::id()) {
            abort('403');
        }
    }
}
