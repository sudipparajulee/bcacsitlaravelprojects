<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="{{asset('datatable/datatables.css')}}">
        <script src="{{asset('datatable/jquery-3.6.0.js')}}"></script>
        <script src="{{asset('datatable/datatables.js')}}"></script>

        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="flex">
            <div class="w-56 shadow-lg h-screen bg-gray-300">
                <div class="my-5">
                    <img src="https://bitmapitsolution.com/images/logo/logo.png" class="w-10/12 mx-auto bg-white py-2 rounded-lg" alt="">
                </div>
                <div class="mt-12">
                    <a href="{{route('dashboard')}}" class="text-xl border-b-2 border-blue-600 block ml-5 hover:bg-blue-500 hover:text-white p-2"><i class="ri-dashboard-3-line"></i> Dashboard</a>

                    <a href="{{route('notice.index')}}" class="text-xl border-b-2 border-blue-600 block ml-5 hover:bg-blue-500 hover:text-white p-2"><i class="ri-mic-2-line"></i> Notices</a>

                    <a href="{{route('gallery.index')}}" class="text-xl border-b-2 border-blue-600 block ml-5 hover:bg-blue-500 hover:text-white p-2"><i class="ri-gallery-fill"></i> Gallery</a>

                    <a href="{{route('category.index')}}" class="text-xl border-b-2 border-blue-600 block ml-5 hover:bg-blue-500 hover:text-white p-2"><i class="ri-bar-chart-horizontal-line"></i> Categories</a>


                    <a href="{{route('news.index')}}" class="text-xl border-b-2 border-blue-600 block ml-5 hover:bg-blue-500 hover:text-white p-2"><i class="ri-file-list-3-line"></i> News</a>

                    <form action="{{route('logout')}}" method="POST" class="text-xl border-b-2 border-blue-600 block ml-5 hover:bg-blue-500 hover:text-white p-2 flex">
                        @csrf
                        <i class="ri-logout-circle-line"></i> &nbsp;
                        <input type="submit" value="Logout" class="w-full text-left cursor-pointer">
                    </form>

                </div>
            </div>

            <div class="p-4 flex-1">
                @yield('content')
            </div>
        </div>
    </body>
</html>
