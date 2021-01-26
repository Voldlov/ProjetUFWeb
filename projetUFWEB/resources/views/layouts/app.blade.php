<!DOCTYPE html>
<html lang="fr">
<head>
    <title>@yield('title')</title> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="">
    <link rel="stylesheet" href="app.css"/>
</head>
<body>
    @component('layouts.components.navbar')
        <!--@slot('name')
            la slot permet de passer la valeur contenue dans les paramètres du components
            Home
        @endslot-->
    @endcomponent
    <section class="container">
        @section('top')

        @endsection
    </section>
    <section class="map">
        @section('center')

        @endsection
    </section>
    <section>  
        @section('foot')

        @endsection
    </section>
</body>
@component('layouts.components.footer')
  <!-- Ajout du footer commun à toute les pages -->
@endcomponent
<!--JavaScript at end of body for optimized loading-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script src="../js/script.js"></script>
</html>