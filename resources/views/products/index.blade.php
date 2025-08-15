<x-layout>
<H1>Products</H1>
<a href="{{route('products.create')}}"> New Product</a>
@foreach ($products as $product)
    <h3><a href="{{route('products.show', $product->id)}}">{{$product->name}}</a></h3>
    <p>{{$product->description}}</p>
    <p>{{$product->size}}</p>
    <p>{{$product->price}}</p>
@endforeach
{{$products->links()}}
</x-layout>
