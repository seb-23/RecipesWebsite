<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">

            @forelse($recipes as $recipe)
                <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
                    <div class="flex-1 flex flex-col p-8">
                        <img class="w-32 h-32 flex-shrink-0 mx-auto rounded-full" src="{{$recipe->img_url}} ? {{$recipe->img_url}} : {{asset('/images/default-v1.jpeg')}}" alt="">
                        <h3 class="mt-6 text-gray-900 text-sm font-medium">{{$recipe->title}}</h3>
                        <dl class="mt-1 flex-grow flex flex-col justify-between">
                            <dt class="sr-only">Instructions</dt>
                            <dd class="text-gray-500 text-sm">{{substr($recipe->instructions, 0, 75)}}</dd>
                        </dl>
                    </div>
                    <div>
                        <div class="-mt-px flex divide-x divide-gray-200">
                            <div class="w-0 flex-1 flex">
                                <a href="mailto:" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
                                    <!-- Heroicon name: solid/share -->
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z" />
                                    </svg>
                                    <span class="ml-3">Share</span>
                                </a>
                            </div>
                            <div class="-ml-px w-0 flex-1 flex">
                                <a href="{{route('recipes.show', $recipe)}}" class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500">
                                    <!-- Heroicon name: solid/view -->
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="ml-3">View</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>

            @empty
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    No Relevant Recipes Yet
                </td>
        @endforelse

        </ul>

    </div>
</div>
