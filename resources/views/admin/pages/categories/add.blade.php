@extends('admin.layout')

@section('title', 'Add Category')

@section('content')

<div class="content-wrapper p-5">

    <form action="{{route('admin.categories.store')}}" method="post">
        @csrf
        @method('post')
        
        <h3 class="font-weight-bold">Add Category</h3>

        <div class="form-group ">
            <label for="categoryname">Name</label>
            <input type="text" class="form-control" id="categoryname" name="name"  placeholder="category name">
            @error('name')
            <span class="error-message"><i class="fa-solid fa-circle-exclamation"></i>  {{ $message }}</span>
            @enderror

        </div>

        <div class="form-group ">
            <label for="categorydescription">Description</label>
            <input type="text" class="form-control" id="categorydescription" name="description" placeholder="category description">
            @error('description')
            <span class="error-message"><i class="fa-solid fa-circle-exclamation"></i>  {{ $message }}</span>
            @enderror

        </div>
          
        
        <div class="text-right">
            <button type="submit" class="btn btn-primary">Add Category</button>
        </div>
    </form>
</div>
@endsection