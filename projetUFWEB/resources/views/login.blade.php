<!--utiliser la vue parent-->
@extends('layouts.app')

<!-- Choix du titre -->
@section('title', 'Se connecter')

@section('top')
@endsection
@section('center')
    
<h2>Log In</h2>
    <form action="#" pb-autologin="true" autocomplete="off">
        <div class="input-row login-input">
            <div class="input-label">Addresse mail</div>
            <input placeholder="Addresse mail" id="username" type="email" class="validate">
            <!--<div class="error">Requis !</div>-->
        </div>
        <div class="input-row login-input">
            <div class="input-label">Mot de passe</div>
            <input placeholder="Mot de passe" id="password" type="password" class="validate">
            <!--<div class="error">Requis !</div>-->
        </div>
        <div class="login-btn-bar">
            <button type="submit" class="btn-full" pb-role="submit" >Log In</button>
        </div>
    </form>
    <div class="login-switch-container">
        <a href="sign_up.html">Sign Up</a>
        &nbsp;&nbsp;·&nbsp;&nbsp;
        <a href="#">Forgot password</a>
    </div>
@endsection

@section('foot')
@endsection