@extends('layouts.app')

@section('content')
    <div class="row">
        <h1 class="col-6" style="font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Helvetica,Arial,sans-serif;">Instagram</h1>
        <div class="col-6">
            {!! link_to_route('login', 'ログイン', [], ['class' => 'btn btn-lg btn-primary']) !!}
            {!! link_to_route('signup.get', '新しいアカウントを作成', [], ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    </div>
@endsection