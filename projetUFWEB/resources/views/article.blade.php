<!--utiliser la vue parent-->
@extends('layouts.app')

<!-- Choix du titre -->
@section('title', 'Recherche')

@section('top')
    <!-- le paramètre parent signifie : ne pas écraser le contenue, juste ajouter -->
    @parent
    <p>Child left</p>
@endsection

@section('center')
    <!-- -->
    <p>Article Content</p>

    @if (count($data) === 1)
        Un élément.
    @elseif (count($data) > 1)
        Plusieurs éléments.
    @else
        Liste vide.
    @endif

    <ul>
    @foreach ($data as $d)
        <li>{{ $d }}</li>
    @endforeach
    </ul>
@endsection
@section(foot)

@endsection