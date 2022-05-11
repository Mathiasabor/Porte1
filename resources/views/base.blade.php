<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title','contenu_par_defaut')</title>
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> 
       
    </head>
    <body class="py-6 flex flex-col justify-between items-center min-h-screen">
        <main role="main" class="flex flex-col justify-center  items-center">
            @yield('content') 
        </main>
        
       {{env('APP_NAME')}}
        {{config('database.connections.sqlite.driver')}}
        {{config('projet.slogan')}}
   
        <footer>
           <p class="text-gray-400">
            &copy; Copyright {{date("Y")}}
                @if(Route::is('app_home'))
                    &middot; <a href="about-us" class="text-indigo-500 hover:text-indigo-600 underline "> About us</a>
                @endif
            </p>
           
         </footer>
      
    </body>
</html>
