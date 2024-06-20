@extends('admin.layout')

@section('title', 'Products')

@section('content')

<div class="content-wrapper">
    

    <table class="table">
        <thead>
            <tr>    
                <td>Id</td>
                <td>Name</td>
                <td>Brand Name</td>
                <td>Description</td>
                <td>Price</td>
                <td>Stock</td>
                {{-- <td>Edit</td> --}}
                <td>Delete</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->brand_name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->stock}}</td>
                {{-- <td><a href="{{route('admin.products.edit', ['product'=> $product->id])}}">Edit</a></td> --}}
                <td>
                    <form action="{{route('admin.products.delete', ['product'=> $product->id])}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit">Delete</button>
                    </form>
                </td>

        </tr>
        @endforeach
    </tbody>
</table>

</div>
@endsection