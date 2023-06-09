@extends('layouts.app')
@section('content')
@include('layouts.message')
    <h2 class="text-4xl text-blue-600 border-b-4 border-blue-300">News</h2>

    <div class="my-5 text-right">
        <a href="{{route('news.create')}}" class="bg-blue-600 text-white px-4 py-2 rounded-lg"><i class="ri-add-line"></i> Add News</a>
    </div>

    <table id="mytable" class="display">
        <thead>
            <th>Date</th>
            <th>Title</th>
            <th>Description</th>
            <th>Picture</th>
            <th>Category</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach($news as $new)
            <tr>
                <td>{{$new->news_date}}</td>
                <td>{{$new->title}}</td>
                <td><p class="h-16 overflow-auto">{{$new->description}}</p></td>
                <td><img class="w-32" src="{{asset('images/news/'.$new->photopath)}}" alt=""></td>
                <td>{{$new->category->name}}</td>
                <td class="w-32">
                    <a href="{{route('news.edit',$new->id)}}" class="bg-blue-600 text-white px-3 py-1 rounded-lg mx-1"><i class="ri-edit-line"></i></a>
                    <a onclick="showDelete('{{$new->id}}')" class="bg-red-600 text-white px-3 py-1 rounded-lg mx-1"><i class="ri-delete-bin-6-line"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div id="deletebox" class="hidden fixed inset-0 bg-blue-500 bg-opacity-40 backdrop-blur-sm">
        <div class="flex h-full justify-center items-center">
            <div class="bg-white p-6 rounded-lg">
                <p class="font-bold text-2xl">Are you sure to Delete ?</p>
                <p class="text-center text-5xl"><i class="ri-emotion-sad-line"></i></p>
                <form action="{{route('news.delete')}}" method="POST" class="flex justify-center mt-2">
                    @csrf
                    <input type="hidden" id="dataid" name="dataid" value="">
                    <input type="submit" value="Yes" class="bg-blue-600 text-white rounded-lg cursor-pointer px-8 py-2 mx-1">
                    <a onclick="hideDelete()" class="bg-red-600 text-white rounded-lg cursor-pointer px-8 py-2 mx-1">Exit</a>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('#mytable').DataTable();
        });
    </script>

    <script>
        function showDelete(id)
        {
            $('#deletebox').removeClass('hidden');
            $('#dataid').val(id);
        }

        function hideDelete()
        {
            $('#deletebox').addClass('hidden');
        }
    </script>

@endsection