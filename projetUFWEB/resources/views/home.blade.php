<!--utiliser la vue parent-->
@extends('layouts.app')

<!-- Choix du titre -->
@section('title', 'Accueil')

@section('top')
  <!-- Bannière-->

    <h1 class="header center orange-text">Projet UF Web</h1>
    <div class="row center">
      <h5 class="header col s12 light">Phrase d'accroche</h5>
    </div>
    <div class="row center">
      <a href="#" class="btn-large waves-effect waves-light orange">Je veux commencer mon aventure !</a>
    </div>
@endsection

@section('center')
    <div class="parallax">
      <img src="img/map.png" alt="map">
    </div>
@endsection

@section('foot')
    <!-- Mot des créateurs -->
    <div class="section">
      <div class="row">
        <div class="col 12 center">
          <h2>Mot des créateurs</h2>
          <p class="center-align light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis maiores architecto veritatis autem, reiciendis qui aut animi minus dicta necessitatibus adipisci provident quo id atque possimus, numquam, incidunt porro voluptas!</p>
        </div>
      </div>
    </div>
@endsection