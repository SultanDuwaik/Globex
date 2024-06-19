@extends('admin.layout')

@section('title', 'Categories')

@section('content')

<div class="content-wrapper">
    

    <table class="table">
        <thead>
            <tr>    
                <td>Id</td>
                <td>Name</td>
                <td>Description</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->description}}</td>
                <td><a href="{{route('admin.categories.edit', ['category'=> $category->id])}}">Edit</a></td>
                <td>
                    <form action="{{route('admin.categories.delete', ['category'=> $category->id])}}" method="post">
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