@if (count($users) > 0)
<div class="row col-xs-offset-4 col-xs-4">
<ul class="media-list">
@foreach ($users as $user)
    <li class="media">
        <div class="media-left">
            <img class="media-object img-rounded" src="{{ Gravatar::src($user->email, 50) }}" alt="">
        </div>
        <div class="media-body">
            <div>
                {{ $user->name }}
            </div>
            <div>
                <p>{!! link_to_route('users.show', 'View profile', ['id' => $user->id]) !!}</p>
                <div class="row col-xs-8">
                <p>@include('user_follow.follow_button', ['user' => $user])</p>
                </div>
            </div>
        </div>
    </li>
@endforeach
</ul>

{!! $users->render() !!}
</div>
@endif

