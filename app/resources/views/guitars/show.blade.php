@extends('layout')

@section('content')
    <div class="max-w-7xl mx-auto p-6 lg:p-8">

        <div class="bg-white p-4">
            <h3 class="bg-white">
                {{$guitar['name']}}
            </h3>
            <ul>
                <li class="bg-white">Made by: {{ $guitar['brand'] }}</li>
                <li class="bg-white">Made on: {{ $guitar['yearMade'] }}</li>
            </ul>
            @auth
                <a href="{{ route('guitars.edit', ['guitar' => $guitar['id']]) }}" class="btn">Edit</a>
            @else
                <span>Login to edit</span>
            @endauth
        </div>

    </div>
@endsection