<!--utiliser la vue parent-->
@extends('layouts.app')

<!-- Choix du titre -->
@section('title', 'pannier')

@section('top')
    <h1 class="header center orange-text">Panier</h1>
@endsection

@section('center')
<ul class="collection">
            <li class="collection-item avatar">
                <i class="material-icons circle orange">api</i>
              <span class="title"><strong>Ecuyer</strong></span>
              <p>Avantage : 5% sur les impots</p>
              <p>Prix : 50€</p>
              <a href="#!" class="orange-text">X Supprimer</a>
            </li>
            <li class="collection-item avatar">
              <i class="material-icons circle blue">folder</i>
              <span class="title"><strong>Chevalier</strong></span>
              <p>Avantage : 10% sur les impots</p>
              <p>Prix : 500€</p>
              <a href="#!" class="orange-text">X Supprimer</a>
            </li>
            <li class="collection-item avatar">
              <i class="material-icons circle green">insert_chart</i>
              <span class="title"><strong>Baron</strong></span>
              <p>Avantage : 15% sur les impots</p>
              <p>Prix : 5000€</p>
              <a href="#!" class="orange-text">X Supprimer</a>
            </li>
            <li class="collection-item avatar">
              <i class="material-icons circle red">play_arrow</i>
              <span class="title"><strong>Empereur</strong></span>
              <p>Avantage : 100% sur les impots</p>
              <p>Prix : 5000000000€</p>
              <a href="#!" class="orange-text">X Supprimer</a>
            </li>
          </ul>
@endsection

@section('foot')
    <div class="btn-panier right-align">
            <a class="btn waves-effect orange">Montant : 5000005550 €</a>
            <button class="btn waves-effect brown waves-orange" type="submit" name="action">Passer à la caisse
                <i class="material-icons right">send</i>
            </button>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

@endsection