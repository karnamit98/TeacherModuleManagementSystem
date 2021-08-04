<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" data-theme="dark">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TASK-1</title>

    <!--Fontawesome-->
    <script src="https://kit.fontawesome.com/86641d4077.js" crossorigin="anonymous"></script>

    <!-- Style Sheet -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>@yield('title')</title>
</head>
    <body> 
        
        <!-- Navigation -->
        <nav>
            <ul>
                <li><a href={{ route('home') }} > Home </a> </li>
                <li><a href={{ route('addLecturer') }} > Add Lecturers </a></li>
            </ul>
        </nav>

        <section id="mainSection">
            @yield('content')
        </section>

        <!-- JQuery -->
        <script
        src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <!-- CDN for Multi-select dropdown , select2 -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet"/>
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>

        <!-- Custom JS -->
        <script src="{{ asset('js/app.js') }}" defer ></script>

    </body>
</html>
