<!DOCTYPE html>
<html>
    <head>
        <Title>Laravel App</Title>
        @vite(['resources/css/app.css'])
    </head>
    <body class="bg-gray-900 text-white">
        @if (session('status'))
           <div>{{session('status')}}</div>
        @endif
        {{$slot}}
    </body>
</html>