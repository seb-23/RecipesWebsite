<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Recipe
                        </th>

                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Actions
                        </th>

                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">

                    @forelse($recipes as $recipe)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="{{ $recipe->photo ? : asset('/images/default-v1.jpeg') }}" alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                            <h1>
                                                <a href="{{route('recipes.show', $recipe)}}">{{  $recipe->title  }}</a>
                                            </h1>
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            <a href="/recipes/{{  $recipe->id   }}"> {{  substr($recipe->instructions, 0, 50)  }}... </a>
                                        </div>
                                    </div>
                                </div>
                            </td>

                            <td>
                                @include('recipes.actions', ['recipe' => $recipe])
                            </td>

                        </tr>

                    @empty
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            No Relevant Recipes Yet
                        </td>
                    @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
