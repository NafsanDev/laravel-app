<!DOCTYPE html>
<html>
    <head>
        <Title>Laravel App</Title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    </head>
    <body>
        @if (session('status'))
           <div>{{session('status')}}</div>
        @endif
        {{$slot}}
    </body>
</html>