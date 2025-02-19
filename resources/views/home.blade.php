<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('title', 'Pagina Principală') <!-- Titlul paginii -->

@section('content') <!-- Conținutul paginii -->
    <h1>Welcome to To-Do App pentru echipe!</h1>
    <p>Acesta este un instrument simplu pentru gestionarea sarcinilor într-o echipă.</p>

    <h2>Secțiuni:</h2>
    <ul>
        <li><a href="{{ route('tasks.index') }}">Lista de sarcini</a></li>
        <li><a href="{{ route('tasks.create') }}">Crearea unei sarcini</a></li>
    </ul>

    <h2>Despre aplicație:</h2>
    <p>Aplicația permite utilizatorilor să gestioneze sarcini, să le adauge, să le vizualizeze și să le editeze.</p>
@endsection
