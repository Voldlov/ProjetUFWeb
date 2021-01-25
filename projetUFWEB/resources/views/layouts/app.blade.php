<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title> 

    <!--Ajout ici du style (CSS) -->
</head>
<body>
    @component('layouts.components.navbar')
        @slot('name')
            <!-- la slot permet de passer la valeur contenue dans les paramètres du components -->
            Home
        @endslot
    @endcomponent
    <div>
        <div>
            <div>   
                @section('left')
                    Layout left 
                @endsection
            </div>

            <div>
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>