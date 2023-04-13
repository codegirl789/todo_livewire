@extends('layouts.app')

@section('content')
    <div class="flex justify-center border pb-4 pt-4">
        <h1 class="text-2xl">All Your Todos</h1>
        <a href="/todo/create" class="py-1 mx-4 px-4 text-gray-500"><i class="fa-solid fa-arrow-left fa-xl"></i></a>
    </div>

    <div class="py-2 px-5">
        <x-alert />
        <ul class="py-2">
            @foreach ($todos as $todo)
                <li class="flex justify-between py-2">
                    <div class="">
                        @include('partials.completed_button')
                    </div>
                    @if ($todo->completed)
                        <p class="line-through font-bold"> {{ $todo->title }}</p>
                    @else
                        <p> {{ $todo->title }}</p>
                    @endif
                    <div class="">
                        <a href="/todo/{{ $todo->id }}/edit" class="  rounded text-orange-300 fas fa-edit fa-xl"></a>

                        <a onclick="event.preventDefault();
                        if(confirm('are you sure you want to delete todo?')){
                            getElementById('form-destroy-{{ $todo->id }}').submit();
                        }"
                            class="rounded text-orange-300 fas fa-trash text-red-300 pl-2 fa-xl"></a>


                        <form style="display: none" action="/todo/{{ $todo->id }}" method="POST"
                            id="form-destroy-{{ $todo->id }}" method="POST">
                            @csrf
                            @method('delete')
                        </form>
                    </div>


                </li>
            @endforeach
        </ul>
    </div>
@endsection
