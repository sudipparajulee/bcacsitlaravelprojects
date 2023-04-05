@extends('layouts.app')
@section('content')
<h2 class="text-4xl text-blue-600 border-b-4 border-blue-300">Edit News</h2>

<form action="{{route('news.update',$news->id)}}" method="POST" class="py-5" enctype="multipart/form-data">
    @csrf

    <select name="category_id" class="w-full rounded-lg mt-5">
        <option selected disabled>Choose a Category</option>
        @foreach($categories as $category)
            <option value="{{$category->id}}" @if($news->category_id == $category->id) selected @endif>{{$category->name}}</option>
        @endforeach
    </select>

    <input type="date" class="w-full rounded-lg mt-5" name="news_date" value="{{$news->news_date}}">
    @error('news_date')
        <p class="text-red-600 text-sm">* {{$message}}</p>
    @enderror

    <input type="text" class="w-full rounded-lg mt-5" placeholder="Title" name="title" value="{{$news->title}}">
    @error('title')
        <p class="text-red-600 text-sm">* {{$message}}</p>
    @enderror

    <input type="text" class="w-full rounded-lg mt-5" placeholder="Description" name="description" value="{{$news->description}}">
    @error('description')
        <p class="text-red-600 text-sm">* {{$message}}</p>
    @enderror

    Current image:
    <img src="{{asset('images/news/'.$news->photopath)}}" class="w-24" alt="">
    <input type="file" name="photopath" class="mt-5">
    @error('photopath')
        <p class="text-red-600 text-sm">* {{$message}}</p>
    @enderror

    <div class="mt-4 flex">
        <input type="submit" class="bg-blue-600 text-white px-4 py-2 mx-2 rounded cursor-pointer" value="Update News">
        <a href="{{route('news.index')}}" class="bg-red-600 text-white px-6 mx-2 py-2 rounded">Exit</a>
    </div>
</form>
@endsection