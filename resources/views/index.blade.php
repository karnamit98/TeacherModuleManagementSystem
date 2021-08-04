<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TASK-1</title>

    <!--Fontawesome-->
    <script src="https://kit.fontawesome.com/86641d4077.js" crossorigin="anonymous"></script>

    <!-- Style Sheet -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    
    

    <!-- MAIN SECTION -->
    <section id="mainSection">
        
        <!-- TABLE SHOWING TEACHER'S DATA -->
        <section id="dataSection">
            @include('showData')
        </section>


        <!-- ADD TEACHER FORM -->
        <section id="formSection">
            @include('addForm')
        </section>

    </section> 
    <!-- MAIN SECTION ENDS -->

</body>
</html>