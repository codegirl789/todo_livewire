<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="text-center flex justify-center pt-10">
        <div class="w-1/3 border-2 rounded-lg shadow-lg py-4">
            @yield('content')
        </div>
    </div>
</body>

</html>
