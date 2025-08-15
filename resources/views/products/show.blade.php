<x-layout>
<h2>{{$product->name}}</h2>
<p>{{$product->description}}</p>
<p>{{$product->size}}</p>
<p>{{$product->price}}</p>
<a href="{{route('products.edit', $product->id)}}">Edit</a>
<form method="post" action="{{route('products.destroy', $product)}}">
    @csrf
    @method('DELETE')
    <button>Delete</button>
</x-layout>
