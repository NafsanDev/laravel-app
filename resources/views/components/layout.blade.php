<!DOCTYPE html>
<html>
    <head>
        <Title>Laravel App</Title>
        @vite(['resources/css/app.css'])
    </head>
    <body class="bg-gray-900 text-white">
        <div class="flex flex-col items-center justify-center min-h-screen">
            @if (session('status'))
            <div>{{session('status')}}</div>
            @endif
            {{$slot}}
        </div>
    </body>
</html>