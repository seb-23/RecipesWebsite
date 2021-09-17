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
            <x-textarea id="ingredients" name="ingredients" wire:model.defer="ingredients" autocomplete="ingredients" />
            <x-jet-input-error for="ingredients" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="instructions" value="{{ __($formAction === 'create' ? 'Instructions' : 'New Instructions') }}" />
            <x-textarea id="instructions" name="instructions" wire:model.defer="instructions" autocomplete="instructions" />
            <x-jet-input-error for="instructions" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="notes" value="{{ __($formAction === 'create' ? 'Notes' : 'New Notes') }}" />
            <x-textarea id="notes" name="notes" autocomplete="notes" wire:model.defer="notes" />
            <x-jet-input-error for="notes" class="mt-2" />
        </div>


        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="photo" value="{{ __($formAction === 'create' ? 'Photo' : 'New Photo') }}" />

                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                    <div class="space-y-1 text-center">
                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <div class="flex justify-center text-sm text-gray-600">
                            <label for="photo" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                <span>Upload a file</span>
                                <input type="file" id="photo" name="photo" wire:model.defer="photo" autocomplete="photo" class="sr-only">
                            </label>
                            <p class="pl-1">or drag and drop</p>
                        </div>

                        <p class="text-xs text-gray-500">
                            PNG, JPG, GIF up to 1MB
                        </p>

                        @if(isset($photo))
                            <img class="w-full h-64 object-cover mb-6" src="{{$photo->temporaryUrl()}}" />
                        @elseif(isset($recipe->photo))
                            <img class="w-full h-64 object-cover mb-6" src="{{asset($recipe->photo)}}" />
                        @endif

                    </div>

                </div>

            <x-jet-input-error for="photo" class="mt-2" />
        </div>


    </x-slot>

    <x-slot name="actions">
        <x-jet-button>
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>

</x-jet-form-section>
