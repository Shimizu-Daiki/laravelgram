<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Laravelgram</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link href="{{ secure_asset('css/application.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Noto+Sans+JP:400,700" rel="stylesheet">
        
    </head>

    <body class="whole">
        <div class="container">
            <div class="row">
                <h1 class="col-12 text-center title" style="font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Helvetica,Arial,sans-serif;">あなただけの1枚を投稿</h1>
                
            </div>
            <div class="row">
                <div class="col-12 text-center" style="flex-direction: column;">
                    {!! link_to_route('login', 'ログイン', [], ['class' => 'btn btn-lg btn-primary']) !!}
                    {!! link_to_route('signup.get', '新しいアカウントを作成', [], ['class' => 'btn btn-lg btn-primary']) !!}
                </div>
            </div>
            

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
    </body>
</html>