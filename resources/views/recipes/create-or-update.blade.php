<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Form')}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if($formAction == 'update')
                <livewire:create-update-recipe :recipe="$recipe" :instructions="$recipe->instructions" :ingredients="$recipe->ingredients"
                                               :notes="$recipe->notes" :title="$recipe->title" :formAction="$formAction" />
            @else
                <livewire:create-update-recipe :formAction="$formAction" />
            @endif
        </div>
    </div>
</x-app-layout>
