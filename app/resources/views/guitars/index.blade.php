@extends('layout')

@section('content')
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        @auth
            <a href="{{ route('guitars.create') }}" class="btn bg-white">Create New Entry</a>
        @else
            <span>Login to create new entry</span>
        @endauth
        
        @if( count($guitars) > 0)
            @foreach($guitars as $guitar)
                <div>
                    <h3>
                        <a href="{{ route('guitars.show', ['guitar' => $guitar['id']]) }}">{{$guitar['name']}}</a>
                    </h3>
                    <ul>
                        <li>Made by: {{ $guitar['brand'] }}</li>
                        <li>Made on: {{ $guitar['yearMade'] }}</li>
                        @auth
                            <form method="POST" action="{{ route('guitars.destroy', ['guitar' => $guitar->id]) }}">
                                @csrf
                                @method('DELETE')
                                <input class="bg-white" type="submit" value="Delete" />
                            </form>
                        @else
                            <span>Login to delete entry</span>
                        @endauth
                    </ul>
                </div>
            @endforeach
        @else
            <div>There are no guitars to display</div>
        @endif

        <div>
            User Input: {{$userInput}}
        </div>
    </div>
@endsection