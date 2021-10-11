@if (Auth::user()->is_favorite($micropost->id))
    {{--アンフェイバリットボタンのフォーム--}}
    {!! Form::open(['route' => ['micropost.unfavorite', $micropost->id], 'method' => 'delete']) !!}
        {!! Form::submit('Unfavorite', ['class' => 'btn btn-success btn-sm']) !!}
    {!! Form::close() !!}
@else
    {{--フェイバリットボタンのフォーム--}}
    {!! Form::open(['route' => ['micropost.favorite', $micropost->id]]) !!}
        {!! Form::submit('Favorite', ['class' => 'btn btn-outline-success btn-sm']) !!}
    {!! Form::close() !!}
@endif
