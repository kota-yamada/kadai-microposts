@extends('layouts.app')

@section('content')
    @if (Auth::check())
       
            
            <div class="row col-xs-offset-4 col-xs-4">
                @if (count($microposts) > 0)
                    @include('microposts.microposts', ['microposts' => $microposts])
                
            
        
                @else <h1>Follow & make lists To Start TimeLine </h1>
                
            </div>
    @endif    
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the Microposts</h1>
                {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection