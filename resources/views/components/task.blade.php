<!-- resources/views/components/task.blade.php -->
<div class="task">
    <h2>{{ $task['title'] }}</h2>
    <p><strong>Descriere:</strong> {{ $task['description'] }}</p>
    <p><strong>Data creării:</strong> {{ $task['created_at'] }}</p>
    <p><strong>Data actualizării:</strong> {{ $task['updated_at'] }}</p>
    <p><strong>Stare:</strong> {{ $task['status'] }}</p>
    <p><strong>Prioritate:</strong> {{ $task['priority'] }}</p>
    <p><strong>Responsabil:</strong> {{ $task['assigned_to'] }}</p>

    <div class="actions">
        <a href="{{ route('tasks.edit', $task['id']) }}">Editează</a>
        <form action="{{ route('tasks.destroy', $task['id']) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Șterge</button>
        </form>
    </div>
</div>
