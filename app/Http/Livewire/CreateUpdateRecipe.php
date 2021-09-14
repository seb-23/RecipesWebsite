<?php

namespace App\Http\Livewire;

use App\Models\Recipe;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CreateUpdateRecipe extends Component
{
    use AuthorizesRequests;

    public $formAction;

    public $recipe;

    public $title;

    public $ingredients;

    public $instructions;

    public $notes;

    public $img_url;

    public $rules = [
        'title'=> ['required', 'min:3', 'max:10'],
        'ingredients'=> 'required',
        'instructions' => 'required',
        'notes' => 'required',
    ];

    public function update()
    {
        $this->recipe->update($this->validate());
        return redirect()->route('recipes.index');
    }

    public function create()
    {
        $validated = $this->validate();
        $validated['user_id'] = Auth::id();
        Recipe::create($validated);

        return redirect()->route('recipes.index');
    }

    public function render()
    {
        return view('livewire.create-update-recipe');
    }
}
