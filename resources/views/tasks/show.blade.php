<!-- resources/views/tasks/show.blade.php -->
@extends('layouts.app')

@section('title', 'Detalii Sarcina') <!-- Titlul paginii -->

@section('content') <!-- Conținutul paginii -->
    <h1>Detalii Sarcina</h1>
    
    <!-- Utilizarea componentei de sarcină -->
    @component('components.task', [
        'task' => [
            'id' => 1,
            'title' => 'Sarcina 1',
            'description' => 'Descrierea sarcinii 1',
            'created_at' => '2025-02-19',
            'updated_at' => '2025-02-19',
            'status' => 'In progres',
            'priority' => 'Ridicată',
            'assigned_to' => 'Ion Popescu'
        ]
    ])
    @endcomponent
@endsection
