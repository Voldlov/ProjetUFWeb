<!--utiliser la vue parent-->
@extends('layouts.app')

<!-- Choix du titre -->
@section('title', 'Recherche')

@section('top')
    <h1 class="header center orange-text">{{$name}}</h1>
    <div class="right-align">
        <h6>NB Dom : 382</h6>
        <h6>Montant : 11 093€</h6>
    </div>
@endsection

@section('center')
    <div>
        <h4>Informations</h4>
        <p>Lieu : Paris</p>
        <p>Description : Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi repudiandae, assumenda sapiente eius necessitatibus officia nam id consequuntur exercitationem consequatur. Ullam a harum dignissimos quasi reprehenderit eos autem modi possimus?</p>
    </div>
@endsection
@section('foot')
    <div>
        <h4>Photos</h3>
        <!--Photos-->
        <div class="col s12 m6 l3">
            <img class="pics" src="img/castle.png" alt="img-castle">
        </div>
        <div class="col s12 m6 l3">
            <img class="pics" src="img/castle.png" alt="img-castle">
        </div>
        <div class="col s12 m6 l3">
            <img class="pics" src="img/castle.png" alt="img-castle">
        </div>
    </div>
@endsection