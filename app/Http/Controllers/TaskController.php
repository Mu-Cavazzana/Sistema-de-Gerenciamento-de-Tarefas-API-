<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;

class TaskController extends Controller
{
    public function index() // Lista todas as tarefas disponíveis
    {
        $tasks = Task::all();
        return response()->json($tasks);
    }

    public function store(Request $request) // Cria uma tarefa
    {
        $task = Task::create($request->all());
        return response()->json($task, 201); // O código de status 201 significa "Created"
    }

    public function show(Task $task) // Retorna os detalhes de uma tarefa
    {
        return response()->json($task);
    }

    public function update(Request $request, Task $task) // Atualiza os dados de uma tarefa
    {
        $task->update($request->all());
        return response()->json($task);
    }

    public function destroy(Task $task) // Exclui uma tarefa
    {
        $task->delete();
        return response()->json(null, 204); // O código de status 204 significa "No Content"
    }
}