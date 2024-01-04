<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body class="container">
    <header>
        <nav class="navbar navbar-expand-md ">
                <div class="collapse navbar-collapse" >
                    <ul class="navbar-nav ">
                        <li class="mr-4">
                            <a   href="{{ '/'}}" >Home</a>
                        </li>
                        <li class="mr-4">
                            <a  href="{{'/listaBista'}}">Erabiltzaileak</a>
                        </li>
                        <li class="mr-4">
                            <a  href="{{ '/gehituBista'}}">Erabiltzaile bat sortu</a>
                        </li>
                        <li class="mr-4">
                            <a  href="{{'/bilatuBotoi'}}">Search</a>
                        </li>
                    </ul>
                </div>
        </nav>
    </header>
    @yield('gehitu')
    @yield('lista')
    @yield('bilatzailea')