@if (Auth::user()->is_favoriting($micropost->id))
    {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete']) !!}
        {!! Form::submit('UnFavorite', ['class' => "btn btn-secondary btn-block"]) !!}
    {!! Form::close() !!}
@else
    {!! Form::open(['route' => ['favorites.favorite', $micropost->id]]) !!}
        {!! Form::submit('Favorite', ['class' => "btn btn-primary btn-block"]) !!}
    {!! Form::close() !!}
@endif