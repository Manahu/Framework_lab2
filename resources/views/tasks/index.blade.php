<!-- resources/views/tasks/index.blade.php -->
@extends('layouts.app')

@section('title', 'Lista de Sarcini') <!-- Titlul paginii -->

@section('content') <!-- Conținutul paginii -->
    <h1>Lista de Sarcini</h1>
    
    <ul>
        @foreach ($tasks as $task)
            <li><a href="{{ route('tasks.show', $task['id']) }}">{{ $task['title'] }}</a></li>
        @endforeach
    </ul>
@endsection
