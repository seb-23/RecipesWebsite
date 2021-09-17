<?php

namespace App\Http\Livewire;

use App\Models\Recipe;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;

class CreateUpdateRecipe extends Component
{
    use AuthorizesRequests, WithFileUploads;

    public $formAction;

    public $recipe;

    public $title;

    public $ingredients;

    public $instructions;

    public $notes;

    public $photo;

    public $rules = [
        'title'=> ['required', 'min:3', 'max:30'],
        'ingredients'=> 'required',
        'instructions' => 'required',
        'notes' => 'required',
        'photo' => 'image|max:1024', // 1MB Max
    ];

    public function update()
    {
        $validated = $this->validate();
        $validated['photo'] = $this->photo->hashName();
        $this->recipe->update($validated);

        return redirect()->route('recipes.index');
    }

    public function create()
    {
        $validated = $this->validate();
        $this->photo->store('public');
        $validated['user_id'] = Auth::id();
        $validated['photo'] = $this->photo->hashName();
        Recipe::create($validated);

        return redirect()->route('recipes.index');
    }

    public function render()
    {
        return view('livewire.create-update-recipe');
    }
}
