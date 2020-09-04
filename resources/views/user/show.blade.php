@extends('layouts.app')

@section('content')
<div class="profile-wrap">
  <div class="row">
    <div class="col-md-4 text-center">
      @if ($user->profile_photo)
        <p>
          <img class="round-img" src="{{ asset('storage/user_images/' . $user->profile_photo) }}" alt="avatar" />
        </p>
      @endif
    </div>
    <div class="col-md-8">
      <div class="row">
        <h1>{{ $user->name }}</h1>
        
        @if ($user->id == Auth::user()->id)
          {!! link_to_route('user.edit', 'プロフィールを編集', [], ['class' => 'btn btn-outline-dark common-btn edit-profile-btn']) !!}
          {!! link_to_route('logout.get', 'ログアウト', [], ['class' => 'btn btn-outline-dark common-btn edit-profile-btn']) !!}
          
          <form id="logout-form" action="{{ route('logout.get') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
        
        @endif

      </div>
      <div class="row">
        <p>
          {{ $user->email }}

        </p>
      </div>
    </div>
  </div>
</div>
@endsection
