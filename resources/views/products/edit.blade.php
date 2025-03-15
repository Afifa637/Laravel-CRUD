<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit the product</h1>
    <form method="post" action="{{route('product.update', ['product'=> $product])}}">
        @csrf
        @method('put')
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{$product->name}}" placeholder="name">
        </div>
        <div>
            <label for="quantity">Quantity</label>
            <input type="text" name="quantity" id="quantity" value="{{$product->quantity}}"  placeholder="quantity">
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" name="description" id="description" value="{{$product->description}}" >
        </div>
        <div>
            <label for="price">Price</label>
            <input type="text" name="price" id="price" value="{{$product->price}}" placeholder="price">
        </div>
        <button type="submit">Save</button>
    </form>

    <div>
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
    </div>
</body>
</html>