<x-front-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Recipes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @include('recipes.card-recipe-display',['recipes' => $recipes])
            {{--            <x-display-recipes :recipes="$recipes" />--}}
        </div>
    </div>
</x-front-layout>
