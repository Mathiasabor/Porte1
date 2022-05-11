<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hello City</title>

       
    </head>
    <body>
        <h1>Hello from Togo</h1>
        <p>il est présentement  {{ date('h: i A')}}</p>

        <footer> 
            <p>&copy; Copyright {{date("Y")}} &middot; <a href="about-us" > About us</a></p>
        </footer>
    </body>
</html>
