@extends('layout')

@section('content')
    <div class="max-w-7xl mx-auto p-6 lg:p-8">

        <div>
            <h3>
                {{$guitar['name']}}
            </h3>
            <ul>
                <li>Made by: {{ $guitar['brand'] }}</li>
                <li>Made on: {{ $guitar['yearMade'] }}</li>
            </ul>
        </div>

    </div>
@endsection