@extends('layouts.app')

@section('content')
    <h1 class="text-2xl">What next you need to do?</h1>
    <x-alert />
    <form action="/todo/store" method="post" class="py-2">
        @csrf
        <input type="text" name="title" class="p-2 rounded border-2" placeholder="Enter Task Title">
        <button class="p-2 rounded border-2">create</button>
    </form>

    <div class="my-4">
        <a href="/todo" class="py-2 px-4 border rounded bg-gray-500 text-white">View List</a>
    </div>
@endsection
