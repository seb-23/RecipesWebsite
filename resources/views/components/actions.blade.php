<div class="pb-6 flex flex-row-reverse">
    <form method="POST" action="{{route('recipes.destroy', ['recipe' => $recipe])}}">
        @csrf
        @method('DELETE')
        <button type="submit" class="button is-link inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-purple-500">
            <x-icons type="trash-can" class="-ml-1 mr-2 h-5 w-5 text-gray-400" viewBox="0 0 20 20"/>
            Delete
        </button>
    </form>
    <a href="{{route('recipes.edit', ['recipe' => $recipe])}}" class="pr-4">
        <button type="button" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-purple-500">
            <x-icons type="edit" class="-ml-1 mr-2 h-5 w-5 text-gray-400" viewBox="0 0 20 20"/>
            Edit
        </button>
    </a>
</div>
