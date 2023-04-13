<span class="fas fa-check {{ $todo->completed == false ? 'text-green-500' : 'text-gray-300' }} cursor-pointer fa-xl pl-3"
    onclick="event.preventDefault();getElementById('form-completed-{{ $todo->id }}').submit();">
</span>

<form style="display: none" action="/todo/{{ $todo->id }}/completed" method="POST"
    id="form-completed-{{ $todo->id }}" method="POST">
    @csrf
    @method('patch')
</form>
