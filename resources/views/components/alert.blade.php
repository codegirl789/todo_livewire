<div class="pt-4">
    @if (session()->has('message'))
        {{ $slot }}
        <div class="py-4 px-2 bg-green-300">{{ session()->get('message') }}</div>
    @elseif($errors->any())
        {{ $slot }}
        @foreach ($errors->all() as $error)
            <div class="py-4 px-2 bg-red-300">{{ $error }}</div>
        @endforeach
    @endif
</div>
