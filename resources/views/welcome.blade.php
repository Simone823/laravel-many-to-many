<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DB BOOLPRESS | WELCOME</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #343a40;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .flex-column {
                flex-direction: column;
            }

            .row-gap-25 {
                row-gap: 25px;
            }

            .text-center {
                text-align: center;
            }

            .text-uppercase {
                text-transform: uppercase;
            }

            .links > a:not(:last-child) {
                margin-bottom: 15px;
            }

            .links > a {
                color: rgb(182, 179, 179);
                font-size: 16px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                display: block;
            }

            .links > a:hover {
                color: white;
                transition: color 300ms linear;
            }

            .links > p {
                color: rgb(182, 179, 179);
                font-weight: bold;
            }

            .welcome_title {
                color: white;
                text-transform: uppercase;
                letter-spacing: 4px;
                text-align: center;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center full-height flex-column row-gap-25">
            <div class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" width="150px" height="150px" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 496.016 496.016" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g>
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
            </div>

            <div class="welcome_title">
                <h3>Benvenuto nel database boolpress</h3>
            </div>

            @if (Route::has('login'))
                <div class="links text-center">
                    @auth
                        {{-- <a href="{{ route('admin.posts.index')}}">Home</a> --}}
                    @else
                        <a href="{{ route('login') }}">Accedi</a>

                        <p class="text-uppercase">O</p>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registrati</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </body>
</html>
