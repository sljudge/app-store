

@extends('layout')

@section('content')
    <h1>Welcome home :)</h1>

    {{-- @if ($app)
        @foreach ($apps as $app)
            <h3>{{$app->title}}</h3>
            <ul>
                
                <li>{{$app->rating}} / 5</li>
                <li>{{$app->category->name}}</li>
                <li>{{$app->genres[0]->name}}</li>
                    
            </ul>
        @endforeach
    @endif --}}

    @if ($genres)
        @foreach ($genres as $genre)
            
            <h3>{{ $genre->name }}</h3>

            @foreach ($genre->apps as $app)
                
                <ul>
                    <li>{{ $app->title }}</li>
                    <li>{{ $app->rating }} / 5</li>
                    <li>{{ $app->category->name }}</li>
                </ul>
                
            @endforeach

        @endforeach  
    @endif



@endsection



    