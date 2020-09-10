<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Instagram</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <!-- Styles -->
        <link href="{{ secure_asset('css/application.css') }}" rel="stylesheet">
    </head>

    <body>

        {{-- ナビゲーションバー --}}
        @include('navbar')

        <div class="container">
            
            {{-- エラーメッセージ --}}
            @include('commons.errors')
            
            <div class="row">
                <div class="offset-2"></div>
                <div class="col-8 text-center">
                    @foreach($posts as $post)
                        <div class="card">
                            <div class="card-header">
                                <div class="media">
                                	<a class="no-text-decoration" href="/users/{{ $post->user->id }}" >
                                        @if ($post->user->profile_photo)
                                            <img class="post-profile-icon round-img" src="{{ asset('storage/user_images/' . $post->user->profile_photo) }}"/>
                                        @else
                                            <img class="post-profile-icon round-img" src="{{ asset('/images/blank_profile.png') }}"/>
                                        @endif
                                    </a>
                                	<h3 class="card-title text-left" style="color: black; font-size: 20px;">{{ $post->user->name }}</h3>
                            	    @if ($post->user->id == Auth::user()->id)
                                      	<a class="ml-auto mx-0 my-auto" rel="nofollow" href="/postsdelete/{{ $post->id }}">
                                          <div class="delete-post-icon">
                                          </div>
                                      	</a>
                                    @endif
                                	
                                	
                                </div>
                                
                            </div>
                            
                            <div class="card-body">
                                @if ($post->image_path)
                                  <!-- 画像を表示 -->
                                  
                                  <img class="rounded img-fluid post" src="{{ $post->image_path }}" alt="Responsive image">
                                  
                                @endif
                                
                                <div class="text-left command">
                                    @include('user_favorite.favorite_button')
                                    
        
                                </div>
                                <div class="comment">
                                    <p class="content">
                                        @if ($post->content)
                                            コメント：{{ $post->content }}
                                        @endif
                                    </p>
                                </div>
                                
                                <p class="createTime">{{ $post->created_at }}</p>
                                
                                
                                
                                
                            </div>
                        </div>
                    @endforeach
                    
                </div>
                <div class="offset-2"></div>
                
            </div>
                
            
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
    </body>
</html>

