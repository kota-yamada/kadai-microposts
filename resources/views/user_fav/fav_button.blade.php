    @if (Auth::user()->is_faving($micropost->id))
        {!! Form::open(['route' => ['user.unfav', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfav', ['class' => "btn btn-danger btn-md　"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['user.fav', $micropost->id]]) !!}
            {!! Form::submit('Favorite', ['class' => "btn btn-success btn-md　"]) !!}
        {!! Form::close() !!}
    @endif