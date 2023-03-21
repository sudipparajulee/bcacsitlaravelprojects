@extends('layouts.app')
@section('content')
<h2 class="text-4xl text-blue-600 border-b-4 border-blue-300">Add New Category</h2>

<form action="" class="py-5">
    <input type="text" class="w-full rounded-lg mt-5" placeholder="Category Name" name="name">
    <input type="text" class="w-full rounded-lg mt-5" placeholder="Priority" name="priority">

    <div class="mt-4 flex">
        <input type="submit" class="bg-blue-600 text-white px-4 py-2 mx-2 rounded cursor-pointer" value="Add Category">
        <a href="{{route('category.index')}}" class="bg-red-600 text-white px-6 mx-2 py-2 rounded">Exit</a>
    </div>
</form>
@endsection