@extends('admin.layout')

@section('title', 'Edit Product')

@section('content')

<div class="content-wrapper p-5">

    <form action="{{route('admin.products.update', ['product'=>$product->id])}}" method="post">
        @csrf
        @method('put')
        
        <h3 class="font-weight-bold">Edit Product</h3>

        <div class="form-group ">
            <label for="productname">Name</label>
            <input type="text" class="form-control" id="productname" name="name"  placeholder="product name" value="{{$product->name}}">
            @error('name')
            <span class="error-message"><i class="fa-solid fa-circle-exclamation"></i>  {{ $message }}</span>
            @enderror

        </div>
        <div class="form-group ">
            <label for="productbrandname">Brand Name</label>
            <input type="text" class="form-control" id="productbrandname" name="brand_name" placeholder="product brand name" value="{{$product->brand_name}}">
            @error('brand_name')
            <span class="error-message"><i class="fa-solid fa-circle-exclamation"></i>  {{ $message }}</span>
            @enderror

        </div>
        <div class="form-group ">
            <label for="productdescription">Description</label>
            <input type="text" class="form-control" id="productdescription" name="description" placeholder="product description" value="{{$product->description}}">
            @error('description')
            <span class="error-message"><i class="fa-solid fa-circle-exclamation"></i>  {{ $message }}</span>
            @enderror

        </div>
        <div class="form-group ">
            <label for="productprice">Price</label>
            <input type="text" class="form-control" id="productprice" name="price" placeholder="product price" value="{{$product->price}}">
            @error('price')
            <span class="error-message"><i class="fa-solid fa-circle-exclamation"></i>  {{ $message }}</span>
            @enderror

        </div>
        <div class="form-group ">
            <label for="productstock">Stock</label>
            <input type="text" class="form-control" id="productstock" name="stock" placeholder="product stock" value="{{$product->stock}}">
            @error('stock')
            <span class="error-message"><i class="fa-solid fa-circle-exclamation"></i>  {{ $message }}</span>
            @enderror

        </div>
        
        
        <div class="text-right">
            <button type="submit" class="btn btn-primary">Update Product</button>
        </div>
    </form>
</div>
@endsection