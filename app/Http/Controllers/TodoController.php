<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoCreateRequest;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::orderBy('completed')->get();
        return view('todos.index', compact('todos'));
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(TodoCreateRequest $request)
    {
        Todo::create($request->all());
        return redirect()->back()->with('message', 'Todo Created Successfully');
    }

    public function edit(Todo $todo)
    {
        return view('todos.edit', compact('todo'));
    }

    public function update(Todo $todo, TodoCreateRequest $request)
    {
        $todo->update($request->all());
        return redirect()->back()->with('message', 'Todo Updated Successfully');
    }

    public function completed(Todo $todo)
    {
        if ($todo->completed == false) {
            $todo->update(['completed' => true]);
        } else {
            $todo->update(['completed' => false]);
        }

        return redirect()->back()->with('message', 'Todo Status Updated');
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();

        return redirect()->back()->with('message', 'Todo Deleted Successfully');
    }
}
