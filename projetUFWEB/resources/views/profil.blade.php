<!--utiliser la vue parent-->
@extends('layouts.app')

<!-- Choix du titre -->
@section('title', 'Profil')

@section('top')
<div class="profile">
        <div class="profile-info">
            <div class="profile-top">
                <div class="profile-picture">
                    <img src="assets/img/profil_pic.jpg" alt="Profil Picture" class="img-circle">
                </div>
                <div class="profile-status">
                    <div class="heading">
                        <h1>Jerry Gollet</h1>
                        <h3>jerrygollet@gmail.com</h3>
                    </div>
                </div>
            </div>
            <div class="profile-status">
                Last online : 2000000 hours
            </div>
        </div>
        <div class="profile-section">
            <div class="profile-tabs">
                <div class="row">
                    <div class="col s12">
                      <ul class="tabs">
                        <li class="tab col s3"><a href="#listing">Titres</a></li>
                        <li class="tab col s3"><a href="#wishlist">Wishlist</a></li>
                        <li class="tab col s3 disabled"><a href="#review">Avis</a></li>
                        <li class="tab col s3"><a href="#seetings">Paramètres</a></li>
                      </ul>
                    </div>
                    <div id="listing" class="col s6">
                        <div class="listing-side-filters">
                            <div class="product">
                                <!--Image -->
                                <!--<div class="product-thumbtail">
                                  <img class="product-image" src="" alt="">
                                </div>-->
                                <!--Contenu-->
                                <div class="product-content">
                                  <div class="product-name">
                                    Chevalier
                                  </div>
                                  <div class="product-saler">
                                    Jerry Gollet
                                  </div>
                                  <div class="price">
                                    5% sur A DEFINIR
                                  </div>
                                </div>
                            </div>
                            <div class="product">
                                <!--Image -->
                                <!--<div class="product-thumbtail">
                                  <img class="product-image" src="css/img/apple.jpg" alt="">
                                </div>-->
                                <!--Contenu-->
                                <div class="product-content">
                                  <div class="product-name">
                                    Chevalier
                                  </div>
                                  <div class="product-saler">
                                    Jerry Gollet
                                  </div>
                                  <div class="price">
                                    5% sur A DEFINIR
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="wishlist" class="col s12">La liste de souhait est vide !</div>
                    <div id="seetings" class="col s12">En production</div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('center')
    
@endsection

@section('foot')
@endsection