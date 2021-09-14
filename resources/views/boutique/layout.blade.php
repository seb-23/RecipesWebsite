
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">

    <title>Fullscreen Template</title>

</head>
<body class="font-sans font-thin">

{{--<div class="w-full h-screen relative text-white">--}}
<div class="bg-gray-900 relative text-white">
{{--    <img src="https://images.unsplash.com/photo-1438109491414-7198515b166b?w=1800" class="absolute top-0 left-0 w-full h-full object-cover"  alt=""/>--}}

    <header class="z-10 relative mx-auto max-w-6xl px-6 py-8 flex justify-between items-center">

        <a href="#" class="text-xl tracking-wider">boutique recipes</a>

        <ul class="hidden md:flex uppercase text-sm text-gray-500">
            <li class="{{ Request::path() === 'boutique' ? 'text-white' : '' }}">
                <a href="/boutique" accesskey="1">Home</a>
            </li>
            <li class="ml-6 {{ Request::path() === 'about' ? 'text-white' : '' }}">
                <a href="/about" accesskey="2">About</a>
            </li>
            <li class="ml-6 {{ Request::path() === 'recipes' ? 'text-white' : '' }}">
                <a href="/recipes" accesskey="3">Recipes</a>
            </li>
            <li class="ml-6 {{ Request::path() === 'members' ? 'text-white' : '' }}">
                <a href="/members" accesskey="4">Members</a>
            </li>
            <li class="ml-6 {{ Request::path() === 'contact' ? 'text-white' : '' }}">
                <a href="/contact" accesskey="5">Contact</a>
            </li>
        </ul>

    </header>

{{--    <div class="absolute top-0 left-0 w-full h-full flex justify-center items-center text-center px-12">--}}
{{--        <div>--}}
{{--            <h1 class="text-3xl md:text-6xl leading-tight mb-16">Duis aute irure dolor, <br class="hidden md:block" />reprehenderit in voluptate.</h1>--}}
{{--            <a href="#" class="border border-white py-4 px-8 hover:bg-white hover:text-black">Get started</a>--}}
{{--        </div>--}}
{{--    </div>--}}

</div>

@yield('content')

<div class="bg-gray-900 text-gray-100 text-center flex justify-center px-6 py-12">

    <a href="#" class="mx-6 hover:text-gray-600">123 Address</a>
    <a href="#" class="mx-6 hover:text-gray-600">0800 123 456</a>
    <a href="#" class="mx-6 hover:text-gray-600">my@email.com</a>

</div>

</body>
</html>
