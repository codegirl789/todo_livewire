@extends('layouts.app')

@section('content')
    <div class="flex justify-center border pb-4 pt-4">
        <h1 class="text-2xl">Edit Todo</h1>
        <a href="/todo" class="py-1 mx-4 px-4 text-gray-500"><i class="fa-solid fa-arrow-left fa-xl"></i></a>
    </div>
    <x-alert />
    <form action="/todo/{{ $todo->id }}" method="POST" class="py-2">
        @csrf
        @method('PUT')
        <input type="text" name="title" class="p-2 rounded border-2" value="{{ $todo->title }}">
        <button class="p-2 rounded border-2">Edit</button>
    </form>

    <div class="my-4">
        <a href="/todo" class="py-2 px-4 border rounded bg-gray-500 text-white">View List</a>
    </div>
@endsection
