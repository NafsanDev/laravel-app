<x-layout>
    <h2>New Product</h2>
    <x-errors/>
    <form method="post" action="{{route('products.store')}}">
        <x-products.form/>
    </form>
</x-layout>
