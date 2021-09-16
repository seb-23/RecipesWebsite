<div class="relative flex pl-5">
    <span class="relative z-0 inline-flex shadow-sm rounded-md -space-x-px">
        <a href="{{route('recipes.edit', ['recipe' => $recipe])}}">
          <button type="button" class="rounded-l-md relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-400 hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
            <x-icons type="edit" class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor" />
          </button>
        </a>

        <a href="{{route('recipes.show', ['recipe' => $recipe])}}">
          <button type="button" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-400 hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
              <x-icons type="eye" class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor"/>
          </button>
        </a>

        <form method="POST" action="{{route('recipes.destroy', ['recipe' => $recipe])}}">
            @csrf
            @method('DELETE')
            <div class="field is-grouped">
                <div class="control">
                  <button type="submit" class="rounded-r-md button is-link relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-400 hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
                    <x-icons type="trash-can" class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor"/>
                  </button>
                </div>
            </div>
        </form>
    </span>
</div>
