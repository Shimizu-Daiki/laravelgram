<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
    <a class="navbar__brand nav_title" href="/">Laravelgram</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-md-auto align-items-center">
        <li>
          {!! link_to_route('posts.create', '投稿', [], ['class' => 'btn btn-primary']) !!}
        </li> 
        <li>
          <a class="nav-link commonNavIcon profile-icon" href="/users/{{ Auth::user()->id }}"></a>
        </li>
      </ul>
    </div>
  </div>
</nav>