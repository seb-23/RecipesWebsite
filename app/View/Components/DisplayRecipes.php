<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DisplayRecipes extends Component
{
    public $recipes;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($recipes)
    {
        $this->recipes = $recipes;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.display-recipes');
    }
}
