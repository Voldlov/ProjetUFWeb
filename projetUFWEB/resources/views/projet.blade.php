@yield('header')
@section('content')
    <h1>Projet type</h1>
    <h2>Liste des offres</h2>
    @if (count($data) === 1)
        Il y a une offre.
    @elseif (count($data) > 1)
        Il y a plusieurs offres.
    @else
        Il n'y a aucune offre.
    @endif

    <ul>
    @foreach ($data as $d)
        <li>{{ $d }}</li>
    @endforeach
    </ul>

@endsection
@yield('footer')