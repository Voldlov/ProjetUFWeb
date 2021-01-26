@extends('layouts.app')

@section('title', 'Création article')

@section('content')
    <form method="post" action="{{ route('article.store') }}">
        @csrf
        <div>
            <label for="content">Description :</label>
            <input type="text" name="content"/>
        </div>
        <button type="submit">Valider</button>
    </form>
@ensection