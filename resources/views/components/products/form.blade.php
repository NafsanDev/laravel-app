@csrf
<label for="name">Name</label>
<input type="text" name="name" id="name" value="{{old('name', $product->name ?? '')}}"/>
<label for="description">Description</label>
<textarea name="description" id="description">{{old('description', $product->description ?? '')}}</textarea>
<label for="size">Size</label>
<input type="text" name="size" id="size" value="{{old('size', $product->size ?? '')}}"/>
<label for="price">Price</label>
<input type="text" name="price" id="price" value="{{old('price', $product->price ?? '')}}"/>
<button>Save</button>