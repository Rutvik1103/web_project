<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    // Show all tasks
    public function index()
    {
        $tasks = Task::all();
        return view('index', compact('tasks'));
    }

    // Show create task form
    public function create()
    {
        return view('create');
    }

    // Store new task
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Task::create($request->all());

        return redirect()->route('tasks.index')
                         ->with('success', 'Task created successfully!');
    }

    // Show edit form
    public function edit($id)
    {
        $task = Task::findOrFail($id);
        return view('edit', compact('task'));
    }

    // Update task
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $task = Task::findOrFail($id);

        $task->title = $request->title;
        
        $task->save();

        return redirect()->route('tasks.index')
                         ->with('success', 'Task updated successfully!');
    }

    // Delete task
    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return redirect()->route('tasks.index')
                         ->with('success', 'Task deleted successfully!');
    }
}
