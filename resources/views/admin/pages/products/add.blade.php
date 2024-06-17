@extends('admin.layout')

@section('title', 'Add Product')

@section('content')

<div class="content-wrapper p-5">

    <form action="{{route('admin.products.store')}}" method="post">
        @csrf
        @method('post')
        
        <h3 class="font-weight-bold">Add Product</h3>

        <div class="form-group ">
            <label for="productname">Name</label>
            <input type="text" class="form-control" id="productname" name="name"  placeholder="product name">
            @error('name')
            <span class="error-message"><i class="fa-solid fa-circle-exclamation"></i>  {{ $message }}</span>
            @enderror

        </div>
        <div class="form-group ">
            <label for="productbrandname">Brand Name</label>
            <input type="text" class="form-control" id="productbrandname" name="brand_name" placeholder="product brand name">
            @error('brand_name')
            <span class="error-message"><i class="fa-solid fa-circle-exclamation"></i>  {{ $message }}</span>
            @enderror

        </div>
        <div class="form-group ">
            <label for="productdescription">Description</label>
            <input type="text" class="form-control" id="productdescription" name="description" placeholder="product description">
            @error('description')
            <span class="error-message"><i class="fa-solid fa-circle-exclamation"></i>  {{ $message }}</span>
            @enderror

        </div>
        <div class="form-group ">
            <label for="productprice">Price</label>
            <input type="text" class="form-control" id="productprice" name="price" placeholder="product price">
            @error('price')
            <span class="error-message"><i class="fa-solid fa-circle-exclamation"></i>  {{ $message }}</span>
            @enderror

        </div>
        <div class="form-group ">
            <label for="productstock">Stock</label>
            <input type="text" class="form-control" id="productstock" name="stock" placeholder="product stock">
            @error('stock')
            <span class="error-message"><i class="fa-solid fa-circle-exclamation"></i>  {{ $message }}</span>
            @enderror

        </div>
        
        <div class="form-group">
            <label for="img">Image 1:</label>
            <input type="file" id="img1" name="img1" accept="image/*">
        </div>
        <div class="form-group">
            <label for="img">Image 2:</label>
            <input type="file" id="img2" name="img2" accept="image/*">
        </div>
        <div class="form-group">
            <label for="img">Image 3:</label>
            <input type="file" id="img3" name="img3" accept="image/*">
        </div>
        <div class="form-group">
            <label for="img">Image 4:</label>
            <input type="file" id="img4" name="img4" accept="image/*">
        </div>
          
        
        <div class="text-right">
            <button type="submit" class="btn btn-primary">Add Product</button>
        </div>
    </form>
</div>
@endsection