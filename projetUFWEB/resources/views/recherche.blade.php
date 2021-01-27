<!--utiliser la vue parent-->
@extends('layouts.app')

<!-- Choix du titre -->
@section('title', "Recherche")

@section('top')
    <h1 class="header center orange-text">Les Projets</h1>
@endsection

@section('center')
    <div class="row card-panel brown">
        <div class="input-field col s12 m3">
            <select class="icons">
                <option value="" disabled selected>Région</option>
                <option value="" data-icon="">example 1</option>
                <option value="" data-icon="">example 2</option>
                <option value="" data-icon="">example 3</option>
            </select>
            <label>Région</label>
            </div>
            <div class="input-field col s12 m3">
            <select class="icons">
                <option value="" disabled selected>Département</option>
                <option value="" data-icon="" class="left">example 1</option>
                <option value="" data-icon="" class="left">example 2</option>
                <option value="" data-icon="" class="left">example 3</option>
            </select>
            <label>Département</label>
        </div>
        <div class="input-field col s12 m3">
            <select class="icons">
                <option value="" disabled selected>Type</option>
                <option value="" data-icon="" class="left">example 1</option>
                <option value="" data-icon="" class="left">example 2</option>
                <option value="" data-icon="" class="left">example 3</option>
            </select>
            <label>Type</label>
        </div>
        <div class="input-field col s12 m3">
            <select class="icons">
                <option value="" disabled selected>Titre</option>
                <option value="" data-icon="" class="left">example 1</option>
                <option value="" data-icon="" class="left">example 2</option>
                <option value="" data-icon="" class="left">example 3</option>
            </select>
            <label>Titre</label>
        </div>
        <div class="col s12">
            <div class="row">
            <div class="input-field col s12">
                <input type="text" id="autocomplete-input" class="autocomplete">
                <label for="autocomplete-input">Rechercher</label>
            </div>
            </div>
        </div>
    </div>
@endsection

@section('foot')
    <h4>Résultats</h3>
    <br>
    <br>
    <div class="row">
        <div class="listing-side-filters">
            <div class="product col s12 m6 l3">
                <!--Image -->
                <!--<div class="product-thumbtail">
                    <img class="product-image" src="" alt="">
                </div>-->
                <!--Contenu-->
                <div class="product-content">
                    <div class="product-name">
                    <a href="#"><strong>Nom du projet</strong></a>
                    </div>
                    <div class="product-saler">
                    Lieu
                    </div>
                    <br>
                    <div class="price">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod nesciunt illum aspernatur qui quaerat distinctio inventore repellendus itaque maiores natus aliquid, dolorum deleniti iste earum? Nesciunt totam inventore aspernatur corrupti!</p>
                    </div>
                </div>
            </div>
            <div class="product col s12 m6 l3">
                <!--Image -->
                <!--<div class="product-thumbtail">
                    <img class="product-image" src="" alt="">
                </div>-->
                <!--Contenu-->
                <div class="product-content">
                    <div class="product-name">
                    <a href="#"><strong>Nom du projet</strong></a>
                    </div>
                    <div class="product-saler">
                    Lieu
                    </div>
                    <br>
                    <div class="price">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod nesciunt illum aspernatur qui quaerat distinctio inventore repellendus itaque maiores natus aliquid, dolorum deleniti iste earum? Nesciunt totam inventore aspernatur corrupti!</p>
                    </div>
                </div>
            </div>
            <div class="product col s12 m6 l3">
                <!--Image -->
                <!--<div class="product-thumbtail">
                    <img class="product-image" src="" alt="">
                </div>-->
                <!--Contenu-->
                <div class="product-content">
                    <div class="product-name">
                    <a href="#"><strong>Nom du projet</strong></a>
                    </div>
                    <div class="product-saler">
                    Lieu
                    </div>
                    <br>
                    <div class="price">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod nesciunt illum aspernatur qui quaerat distinctio inventore repellendus itaque maiores natus aliquid, dolorum deleniti iste earum? Nesciunt totam inventore aspernatur corrupti!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection