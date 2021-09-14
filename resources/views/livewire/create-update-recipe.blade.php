<x-jet-form-section submit='{{$formAction}}'>

    <x-slot name="title">
        {{ __(ucfirst($formAction).' Recipe') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Ensure your recipe is correct.') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="title" value="{{ __($formAction === 'create' ? 'Recipe Name' : 'New Recipe Name') }}" />
            <x-jet-input id="title" type="text" class="mt-1 block w-full" wire:model.defer="title" autocomplete="title" />
            <x-jet-input-error for="title" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="ingredients" value="{{ __($formAction === 'create' ? 'Ingredients' : 'New Ingredients') }}" />
            <x-jet-input id="ingredients" type="text" class="mt-1 block w-full" wire:model.defer="ingredients" autocomplete="ingredients" />
            <x-jet-input-error for="ingredients" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="instructions" value="{{ __($formAction === 'create' ? 'Instructions' : 'New Instructions') }}" />
            <x-jet-input id="instructions" type="text" class="mt-1 block w-full" wire:model.defer="instructions" autocomplete="instructions" />
            <x-jet-input-error for="instructions" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="notes" value="{{ __($formAction === 'create' ? 'Notes' : 'New Notes') }}" />
            <x-jet-input id="notes" type="text" class="mt-1 block w-full" wire:model.defer="notes" autocomplete="notes" />
            <x-jet-input-error for="notes" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-button>
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>

</x-jet-form-section>
