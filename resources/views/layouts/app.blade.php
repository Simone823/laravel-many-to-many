<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <title>@yield('metaTitle')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-dark">

    {{-- App --}}
    <div id="app">

        {{-- Nav --}}
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm fixed-top">
            <div class="container">

                @guest
                    {{-- Link logo page welcome --}}
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 496.016 496.016" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g>
                            <g xmlns="http://www.w3.org/2000/svg">
                            <path style="" d="M0.008,248c0,98.16,57.04,183,139.768,223.184L21.472,147.072C7.728,177.904,0.008,212.04,0.008,248   z" fill="#1c769b" data-original="#1c769b" class=""></path>
                            <path style="" d="M252.36,269.688l-74.416,216.224c22.232,6.536,45.712,10.104,70.064,10.104   c28.872,0,56.576-4.992,82.352-14.056c-0.656-1.072-1.272-2.184-1.768-3.416L252.36,269.688z" fill="#1c769b" data-original="#1c769b" class=""></path>
                            <path style="" d="M415.432,235.496c0-30.664-11.024-51.88-20.448-68.392c-12.584-20.456-24.376-37.752-24.376-58.168   c0-22.808,17.288-44.032,41.648-44.032c1.104,0,2.144,0.152,3.2,0.208C371.368,24.68,312.568,0,248.008,0   c-86.656,0-162.864,44.456-207.2,111.776c5.824,0.184,11.304,0.304,15.952,0.304c25.928,0,66.104-3.152,66.104-3.152   c13.36-0.8,14.928,18.856,1.568,20.424c0,0-13.432,1.584-28.384,2.376l90.312,268.616l54.28-162.768l-38.616-105.848   c-13.376-0.792-26.032-2.376-26.032-2.376c-13.36-0.792-11.8-21.216,1.584-20.424c0,0,40.952,3.152,65.32,3.152   c25.936,0,66.096-3.152,66.096-3.152c13.376-0.8,14.944,18.856,1.576,20.424c0,0-13.448,1.584-28.376,2.376l89.624,266.576   l24.76-82.648C407.256,281.336,415.432,256.712,415.432,235.496z" fill="#1c769b" data-original="#1c769b" class=""></path>
                            <path style="" d="M467.312,154.52c0,25.16-4.704,53.448-18.872,88.832l-75.744,219   c73.728-42.976,123.312-122.864,123.312-214.344c0-43.128-11.016-83.664-30.376-118.992   C466.712,136.92,467.312,145.384,467.312,154.52z" fill="#1c769b" data-original="#1c769b" class=""></path>
                            </g>
                            <path xmlns="http://www.w3.org/2000/svg" style="" d="M370.616,108.928c0-22.808,17.288-44.032,41.648-44.032c1.104,0,2.144,0.152,3.2,0.208  C371.368,24.68,312.568,0,248.008,0c-86.656,0-162.864,44.456-207.2,111.776c5.824,0.184,11.304,0.304,15.952,0.304  c25.928,0,66.104-3.152,66.104-3.152c13.36-0.8,14.928,18.856,1.568,20.424c0,0-13.432,1.584-28.384,2.376l34.44,102.432  c23.432,8.272,48.816,12.824,75.328,12.824c11.032,0,21.872-0.792,32.472-2.304l2.36-7.096l-38.616-105.848  C188.656,130.944,176,129.36,176,129.36c-13.36-0.792-11.8-21.216,1.584-20.424c0,0,40.952,3.152,65.32,3.152  c25.936,0,66.096-3.152,66.096-3.152c13.376-0.8,14.944,18.856,1.576,20.424c0,0-13.448,1.584-28.376,2.376l29.84,88.768  c30.288-16.288,55.952-39.288,74.664-66.88C377.688,138.656,370.616,124.72,370.616,108.928z" fill="#2795b7" data-original="#2795b7"></path>
                            <path xmlns="http://www.w3.org/2000/svg" style="" d="M248.008,0c-77.816,0-147.128,35.92-192.6,91.984c39.912,8.296,83.744,12.896,129.744,12.896  c87.104,0,166.464-16.456,226.136-43.448C367.672,23.216,310.56,0,248.008,0z" fill="#3fb5d1" data-original="#3fb5d1"></path>
                            <g xmlns="http://www.w3.org/2000/svg">
                            </g>
                            <g xmlns="http://www.w3.org/2000/svg">
                            </g>
                            <g xmlns="http://www.w3.org/2000/svg">
                            </g>
                            <g xmlns="http://www.w3.org/2000/svg">
                            </g>
                            <g xmlns="http://www.w3.org/2000/svg">
                            </g>
                            <g xmlns="http://www.w3.org/2000/svg">
                            </g>
                            <g xmlns="http://www.w3.org/2000/svg">
                            </g>
                            <g xmlns="http://www.w3.org/2000/svg">
                            </g>
                            <g xmlns="http://www.w3.org/2000/svg">
                            </g>
                            <g xmlns="http://www.w3.org/2000/svg">
                            </g>
                            <g xmlns="http://www.w3.org/2000/svg">
                            </g>
                            <g xmlns="http://www.w3.org/2000/svg">
                            </g>
                            <g xmlns="http://www.w3.org/2000/svg">
                            </g>
                            <g xmlns="http://www.w3.org/2000/svg">
                            </g>
                            <g xmlns="http://www.w3.org/2000/svg">
                            </g>
                            </g>
                        </svg>
                    </a>

                    @else
                        {{-- Link logo database boolpress index --}}
                        <a class="navbar-brand" href="{{ route('admin.homepage') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="50px" height="50px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 59 59" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                <g><g xmlns="http://www.w3.org/2000/svg" id="Page-1" fill="none" fill-rule="evenodd"><g id="038---Cloud-Data" fill-rule="nonzero">
                                <path id="Shape" d="m40 4v23.05l-9.23 6.32-20.6 14.11c-6.08-.68-10.17-1.99-10.17-3.48v-40z" fill="#3f5c6c" data-original="#3f5c6c"></path>
                                <path id="Shape" d="m40 17v10.05l-9.23 6.32c-3.5733008.4349298-7.1703602.6453428-10.77.63-11.05 0-20-1.79-20-4v-13c0 2.21 8.95 4 20 4s20-1.79 20-4z" fill="#35495e" data-original="#35495e"></path>
                                <path id="Shape" d="m27.971 17.231c-.5522847.023196-1.018804-.4057153-1.042-.958s.4057153-1.018804.958-1.042c2.649439-.1928603 5.2795722-.594101 7.866-1.2.5338367-.1329664 1.0748187.1902488 1.210707.7233492.1358884.5331004-.1843589 1.0758446-.716707 1.2146508-2.6927302.6339441-5.4311907 1.0549113-8.19 1.259z" fill="#35495e" data-original="#35495e"></path>
                                <circle id="Oval" cx="4" cy="10" fill="#ff5364" r="1" data-original="#ff5364"></circle><path id="Shape" d="m4 17c-.55228475 0-1-.4477153-1-1v-2c0-.5522847.44771525-1 1-1s1 .4477153 1 1v2c0 .5522847-.44771525 1-1 1z" fill="#35495e" data-original="#35495e"></path>
                                <circle id="Oval" cx="4" cy="23" fill="#ff5364" r="1" data-original="#ff5364"></circle><path id="Shape" d="m4 30c-.55228475 0-1-.4477153-1-1v-2c0-.5522847.44771525-1 1-1s1 .4477153 1 1v2c0 .5522847-.44771525 1-1 1z" fill="#2c3e50" data-original="#2c3e50"></path>
                                <circle id="Oval" cx="4" cy="36" fill="#ff5364" r="1" data-original="#ff5364"></circle><path id="Shape" d="m4 43c-.55228475 0-1-.4477153-1-1v-2c0-.5522847.44771525-1 1-1s1 .4477153 1 1v2c0 .5522847-.44771525 1-1 1z" fill="#35495e" data-original="#35495e"></path>
                                <path id="Shape" d="m38.944 27c5.613 0 10.276 4.5 11.1 10.348 4.54.809 8.014 5.1 8.014 10.257 0 5.732-4.292 10.4-9.569 10.4h-30.466c-4.423-.005-8.023-3.915-8.023-8.72s3.6-8.715 8.023-8.715h.163c.651-4.71 4.4-8.334 8.917-8.334.8129118.0002985 1.6214297.119218 2.4.353 1.9290077-3.4095139 5.5239573-5.5376966 9.441-5.589z" fill="#f0c419" data-original="#f0c419" class=""></path>
                                <ellipse id="Oval" cx="20" cy="4" fill="#547580" rx="20" ry="4" data-original="#547580"></ellipse></g></g></g>
                            </svg>
                        </a>
                @endguest

                {{-- Btn hamburger media queries --}}
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left Side Of Navbar {{-- My link db boolpress --}} -->
                    <ul class="navbar-nav mr-auto">
                        @guest
                            
                            @else
                                <li class="nav-item text-uppercase font-weight-bold">
                                    <a class="@if (Route::is('admin.categories.index')) text-warning @endif" href="{{route('admin.categories.index')}}">Categories</a>
                                </li>

                                <li class="nav-item text-uppercase font-weight-bold">
                                    <a class="@if (Route::is('admin.tags.index')) text-warning @endif" href="{{route('admin.tags.index')}}">Tags</a>
                                </li>

                                <li class="nav-item text-uppercase font-weight-bold">
                                    <a class="@if (Route::is('admin.posts.index')) text-warning @endif" href="{{route('admin.posts.index')}}">Posts</a>
                                </li>
                                
                                <li class="nav-item text-uppercase font-weight-bold">
                                    <a class="@if (Route::is('admin.categories.create')) text-warning @endif" href="{{route('admin.categories.create')}}">Aggiungi categoria</a>
                                </li>

                                <li class="nav-item text-uppercase font-weight-bold">
                                    <a class="@if (Route::is('admin.tags.create')) text-warning @endif" href="{{route('admin.tags.create')}}">Aggiungi Tag</a>
                                </li>

                                <li class="nav-item text-uppercase font-weight-bold">
                                    <a class="@if (Route::is('admin.posts.create')) text-warning @endif" href="{{route('admin.posts.create')}}">Aggiungi post</a>
                                </li>

                        @endguest
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right bg-secondary" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-white" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


        {{-- Main --}}
        <main class="bg-dark">
            @yield('content')
        </main>
    </div>

</body>
</html>
