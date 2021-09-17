<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <div>
        <x-jet-application-logo class="block h-32 w-auto pl-10" />
    </div>

    <div class="mt-8 text-2xl">
        Welcome to Food Paradise!
    </div>

</div>

<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
    <div class="p-6">
        <div class="flex items-center">
            <x-icons type="open-book" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-400"/>
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="{{route('recipes.index')}}">Personal Recipes</a></div>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500">
                You can create your own personal recipes and have the ability to read, update and delete them!
            </div>

            <a href="{{route('recipes.index')}}">
                <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                    <div>Explore your privileges</div>
                    <div class="ml-1 text-indigo-500">
                        <x-icons type="arrow-right" class="w-4 h-4" />
                    </div>
                </div>
            </a>
        </div>
    </div>

</div>
