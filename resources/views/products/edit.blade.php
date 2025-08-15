<x-layout>
    <h2>Edit Product</h2>
    <x-errors/>
    <form method="post" action="{{route('products.update', $product)}}">
        @method('PATCH')
        <x-products.form :product='$product'/>
    </form>
</x-layout>
