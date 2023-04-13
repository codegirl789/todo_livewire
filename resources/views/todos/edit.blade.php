@extends('layouts.app')

@section('content')
    <h1 class="text-2xl">Edit Todo</h1>
    <x-alert />
    <form action="/todo/{{ $todo->id }}/update" method="POST" class="py-2">
        @csrf
        @method('PUT')
        <input type="text" name="title" class="p-2 rounded border-2" value="{{ $todo->title }}">
        <button class="p-2 rounded border-2">Edit</button>
    </form>

    <div class="my-4">
        <a href="/todo" class="py-2 px-4 border rounded bg-gray-500 text-white">View List</a>
    </div>
@endsection
