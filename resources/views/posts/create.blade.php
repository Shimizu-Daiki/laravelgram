@extends('layouts.app')

@section('content')
  <div class="row card">
    
    <div class="text-left">
      
      <div class="card-header">
        投稿画面
      </div>
      <form action="{{ action('PostsController@store') }}" method="post" enctype="multipart/form-data" class="d-flex flex-column col-sm-6 text-left card-body">
        <label>コメント</label>
        <div class="form-group">
            {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '3']) !!}
            
        </div>
        <input type="file" name="image">
        {{ csrf_field() }}
        <button type="submit" class="btn btn-dark btn-outline-secondary col-sm-2 mt-3" style="color: white;">投稿</button>
      </form>
      
    </div>
    
  </div>
@endsection