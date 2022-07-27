<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind Login Template</title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">
    @livewireStyles

    <link rel="stylesheet" href="{{asset('css/flowbite.css')}}"/>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }
    </style>
</head>
<body class="bg-white font-family-karla h-screen">
{{--@auth()--}}
<nav class="bg-indigo-700">
    <div class="max-w-8xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-20">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button type="button"
                        data-collapse-toggle="mobile-menu"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                        aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!--
                      Icon when menu is closed.

                      Heroicon name: outline/menu

                      Menu open: "hidden", Menu closed: "block"
                    -->
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <!--
                      Icon when menu is open.

                      Heroicon name: outline/x

                      Menu open: "block", Menu closed: "hidden"
                    -->
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
            <div class="flex-1 flex items-center justify-center sm:items-center sm:justify-between">
                <div class="flex-shrink-0 flex items-center">
                    <img class="block lg:hidden h-8 w-auto"
                         src="{{asset('img/logo.png')}}" alt="Azfar">
                    <img class="hidden lg:block h-8 w-auto"
                         src="{{asset('img/logo.png')}}"
                         alt="Azfar">
                    <a href="{{route('home')}}" class="text-gray-300 ml-3">Azfar</a>
                </div>
            </div>
            <div class="hidden inset-y-0 right-0 flex items-center pr-2 sm:block sm:inset-auto sm:ml-6 sm:pr-0">
                <div class="flex space-x-4">
                    <a href="#"
                       class="text-gray-300 hover:bg-blue-500 hover:text-white px-3 py-2 rounded-md text-sm font-medium"
                       aria-current="page">Sifarişlərim</a>

                    <a href="#"
                       class="text-gray-200 hover:bg-blue-500 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Çıxış</a>

                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="#"
               class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Sifarişlərim</a>

            <a href="#"
               class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Çıxış</a>

        </div>
    </div>
</nav>
{{--@endauth--}}
@yield('body')
@livewireScripts
<script src="{{asset('js/flowbite.js')}}"></script>
<script src="{{asset('js/datepicker.js')}}"></script>

</body>
</html>