@extends('layouts.app')
@section('content')
    <h2 class="text-4xl text-blue-600 border-b-4 border-blue-300">Categories</h2>

    <div class="my-5 text-right">
        <a href="{{route('category.create')}}" class="bg-blue-600 text-white px-4 py-2 rounded-lg">Add Category</a>
    </div>

    <table id="mytable" class="display">
        <thead>
            <th>Order</th>
            <th>Category Name</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{$category->priority}}</td>
                <td>{{$category->name}}</td>
                <td>Edit Delete</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        $(document).ready(function () {
            $('#mytable').DataTable();
        });
    </script>

@endsection