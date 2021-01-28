<!DOCTYPE html>
<html lang="fr">
<head>
    <title>@yield('title')</title> 
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="">
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
    @component('layouts.components.navbar')
        <!--@slot('name')
            la slot permet de passer la valeur contenue dans les paramètres du components
            Home
        @endslot-->
    @endcomponent
    <section class="container">
        @yield('top')
    </section>
    <section class="parallax-container">
        @yield('center')
    </section>
    <section class="container">  
        @yield('foot')
    </section>
</body>
@component('layouts.components.footer')
  <!-- Ajout du footer commun à toute les pages -->
@endcomponent
<!--JavaScript at end of body for optimized loading-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/script.js"></script>
</html>