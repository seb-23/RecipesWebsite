<x-front-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Recipes') }}
        </h2>
    </x-slot>

    <form>
        <div class="relative flex-1 px-2 pt-6 flex items-center justify-center">
            <x-search-bar />
        </div>
    </form>

        @include('recipes.card-recipe-display',['recipes' => $recipes])
        {{--            <x-display-recipes :recipes="$recipes" />--}}

</x-front-layout>
