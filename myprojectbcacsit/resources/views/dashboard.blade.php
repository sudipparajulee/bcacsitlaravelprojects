@extends('layouts.app')
@section('content')
    <h2 class="text-4xl text-blue-600 border-b-4 border-blue-300">Dashboard</h2>

    <div class="mt-5 grid grid-cols-3 gap-5">
        <div class="bg-green-500 text-white flex justify-between p-5 rounded-lg">
            <span class="text-xl">Total Categories</span>
            <span class="text-4xl font-bold">25</span>
        </div>

        <div class="bg-blue-500 text-white flex justify-between p-5 rounded-lg">
            <span class="text-xl">Total News</span>
            <span class="text-4xl font-bold">25</span>
        </div>

        <div class="bg-red-500 text-white flex justify-between p-5 rounded-lg">
            <span class="text-xl">Total Visits</span>
            <span class="text-4xl font-bold">25</span>
        </div>
    </div>
@endsection