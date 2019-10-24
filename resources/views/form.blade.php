

@extends( 'layout' )

@section('content')
    
    <main style="margin: 1rem; padding:1rem;">
        
        @if ($app->id)

        {!! Form::open(['action' => ['AppController@update', $app->id], 'method' => 'put']) !!}
            
        @else
            
        {!! Form::open(['action' => ['AppController@store'], 'method' => 'post']) !!}

        @endif

        {{ Form::text('title', $app->id) }}
        {{ Form::select('category_id', $categories, $app->category_id, ['placeholder' => 'Choose a category']) }}
        {{ Form::number('rating', $app->rating) }}/5
        {{ Form::submit('Submit') }}

        {!! Form::close() !!}
    
    </main>


@endsection