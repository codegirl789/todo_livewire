@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <h1 class="text-2xl">All Your Todos</h1>
        <a href="/todo/create" class="py-2 mx-4 px-4 border rounded bg-gray-500 text-white">Create Todo</a>
    </div>

    <div class="py-2 px-5">
        <hr>
        <ul class="py-2">
            @foreach ($todos as $todo)
                <li class="py-2">
                    {{ $todo->title }}
                    <a href="/todo/{{ $todo->id }}/edit"
                        class="py-1 mx-2 px-2 border rounded bg-gray-500 text-white">Edit</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
