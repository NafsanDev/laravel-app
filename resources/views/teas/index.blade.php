<x-layout>
    <h1 class="text-5xl"> These are teas</h1>
    <ul>
        @foreach($teas as $tea)
        <li>
            <a href="/teas/{{$tea['id']}}">{{$tea['name']}}</a>
        </li>
        @endforeach
    </ul>
</x-layout>