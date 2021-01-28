<!--utiliser la vue parent-->
@extends('layouts.app')

<!-- Choix du titre -->
@section('title', "S'enregistrer")

@section('top')
  <h2>Sign Up</h2>
    <div class="col s12 m10 offset-m1 l6 offset-l3">
      <div class="row">
        <!--method="post" dans le form, retiré pour ne pas avoir de message d'erreur, voir fin du fichier web.php-->
        <form action="signin"  class="col s12 m8 offset-m2 l6 offset-l3">
        @csrf 
          <div class="row">
            <div class="input-field col s12">
              <input id="last_name" type="text" class="validate" placeholder="Nom">
              <label for="last_name">Nom d'utilisateur</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="password" type="password" class="validate" placeholder="Mot de passe">
              <label for="password">Mot de passe</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="password" type="password" class="validate" placeholder="Mot de passe (vérification)">
              <label for="password">Confirmez le mot de passe</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input type="text" class="datepicker" name="birthdaytime" id="birthdaytime" class="datepicker" required>
              <label for="birthdaytime">Date de naissance</label>
              <span class="helper-text">Nous demandons votre date de naissance afin de confirmer votre âge et non de la stocker.</span>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="address" type="text" class="validate">
              <label for="address">Adresse</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input id="last_name" type="text" class="validate">
              <label for="last_name">Ville</label>
            </div>
            <div class="input-field col s6">
              <input id="postal" type="number" class="validate" min="01000" max="99999">
              <label for="postal">Code postal</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="email" type="email" class="validate" placeholder="Mail">
              <label for="email">Email</label>
            </div>
          </div>
          En cliquant sur s'inscrire, vous acceptez notre politique de confidentialité ainsi que nos conditions d'utilisation.
          <input type="submit" class="btn-full" pb-role="submit" value="S'inscrire">
        </form>
    </div>
    <div class="login-btn-bar">
    </div>
  </div>
@endsection

@section('center')
 
@endsection

@section('foot')
@endsection