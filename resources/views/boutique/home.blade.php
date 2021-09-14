@extends('boutique.layout')

@section('content')
    <div class="py-24 px-6">

        <div class="max-w-6xl mx-auto mb-12">

            <h2 class="mx-auto text-center text-2xl md:text-5xl max-w-3xl leading-tight text-gray-800 mb-12">Uniting fresh design and clean code to create beautiful websites.</h2>


            <p class="mb-6 text-gray-600 mx-auto max-w-lg text-center leading-relaxed">Donec id elit non mi porta gravida at eget metus. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nullam quis risus eget urna mollis ornare vel eu leo. Cras mattis consectetur purus sit amet fermentum. Nulla vitae elit libero, a pharetra augue. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>


            <p class="text-gray-600 mx-auto max-w-lg text-center leading-relaxed">For more photography check our <a href="#" class="text-black">Instagram</a></p>

        </div>



        <div class="max-w-5xl mx-auto flex flex-wrap items-start">

            <div class="w-full md:w-1/2 p-4 mb-12">
                <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?w=800" class="block w-full h-auto mb-12" />
                <a href="#" class="block text-2xl text-black text-center mb-6">Most Popular</a>
                <p class="mb-6 text-gray-600 text-center leading-relaxed text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
                <a href="#" class="block text-black text-center">Read more</a>
            </div>

            <div class="w-full md:w-1/2 p-4 mb-12">
                <img src="https://images.unsplash.com/photo-1523712999610-f77fbcfc3843?w=800" class="block w-full h-auto mb-12" />
                <a href="#" class="block text-2xl text-black text-center mb-6">Editor's Choice</a>
                <p class="mb-6 text-gray-600 text-center leading-relaxed text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
                <a href="#" class="block text-black text-center">Read more</a>
            </div>

        </div>

        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="relative">
            <div class="absolute inset-0 flex items-center" aria-hidden="true">
                <div class="w-full border-t border-gray-300"></div>
            </div>
            <div class="relative flex justify-center">
    <span class="relative z-0 inline-flex shadow-sm rounded-md -space-x-px">
      <button type="button" class="relative inline-flex items-center px-4 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-400 hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
        <span class="sr-only">Edit</span>
          <!-- Heroicon name: solid/pencil -->
        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
          <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
        </svg>
      </button>
      <button type="button" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-400 hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
        <span class="sr-only">Attachment</span>
          <!-- Heroicon name: solid/paper-clip -->
        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
          <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
        </svg>
      </button>
      <button type="button" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-400 hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
        <span class="sr-only">Annotate</span>
          <!-- Heroicon name: solid/annotation -->
        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
          <path fill-rule="evenodd" d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z" clip-rule="evenodd" />
        </svg>
      </button>
      <button type="button" class="relative inline-flex items-center px-4 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-400 hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
        <span class="sr-only">Delete</span>
          <!-- Heroicon name: solid/trash -->
        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
          <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
        </svg>
      </button>
    </span>
            </div>
        </div>


    </div>
@endsection
