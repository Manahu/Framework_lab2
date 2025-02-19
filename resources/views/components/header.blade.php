<!-- resources/views/components/header.blade.php -->
<header>
    <h1>To-Do App pentru echipe</h1>
    <nav>
        <ul>
            <li><a href="{{ route('tasks.index') }}">Lista de sarcini</a></li>
            <li><a href="{{ route('tasks.create') }}">Crearea unei sarcini</a></li>
            <li><a href="{{ route('about') }}">Despre noi</a></li>
        </ul>
    </nav>
</header>
