<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Metoda pentru afișarea listei de sarcini
    public function index()
{
    // Date statice pentru sarcini
    $tasks = [
        ['id' => 1, 'title' => 'Sarcina 1'],
        ['id' => 2, 'title' => 'Sarcina 2'],
        ['id' => 3, 'title' => 'Sarcina 3'],
    ];

    return view('tasks.index', compact('tasks'));
}

    // Metoda pentru afișarea formularului de creare a unei sarcini
    public function create()
    {
        return 'Formular pentru crearea unei sarcini';
    }

    // Metoda pentru salvarea unei sarcini noi
    public function store(Request $request)
    {
        // Vom lăsa această metodă goală pentru moment
    }

    // Metoda pentru afișarea detaliilor unei sarcini
   public function show($id)
{
    // Date statice pentru sarcină
    $task = [
        'id' => $id,
        'title' => 'Titlul sarcinii ' . $id,
        'description' => 'Descrierea sarcinii ' . $id,
        'status' => 'In progres',
    ];

    return view('tasks.show', compact('task'));
}

    // Metoda pentru afișarea formularului de editare a unei sarcini
    public function edit($id)
    {
        return 'Formular pentru editarea sarcinii cu ID-ul ' . $id;
    }

    // Metoda pentru actualizarea unei sarcini
    public function update(Request $request, $id)
    {
        // Vom lăsa această metodă goală pentru moment
    }

    // Metoda pentru ștergerea unei sarcini
    public function destroy($id)
    {
        // Vom lăsa această metodă goală pentru moment
    }
}
