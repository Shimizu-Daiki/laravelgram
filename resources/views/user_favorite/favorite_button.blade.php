@if (Auth::user()->is_favoring($post->id))
    {{-- お気に入りボタン解除のボタン --}}
    {!! Form::open(['route' => ['favorites.unfavorite', $post->id], 'method' => 'delete']) !!}
        <button type="submit" class="btn  btn-sm" ><i class="fas fa-heart fa-2x" style="color:#e54747;"></i></button>
    {!! Form::close() !!}
@else
    {{-- お気に入り登録のボタン --}}
    {!! Form::open(['route' => ['favorites.favorite', $post->id]]) !!}
        <button type="submit" class="btn  btn-sm"><i class="far fa-heart fa-2x" ></i></button>
    {!! Form::close() !!}
@endif　