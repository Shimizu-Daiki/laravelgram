<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Post;
use Storage;


class PostsController extends Controller
{
    public function index(Request $request)
    {
        
        $posts = Post::all();
        
        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }
    
    public function store(Request $request)
    {
        
        
        $post = new Post;
        
        $form = $request->all();
        
      //s3アップロード開始
        $image = $request->file('image');
      // バケットの`myprefix`フォルダへアップロード
        $path = Storage::disk('s3')->putFile('/', $image, 'public');
      // アップロードした画像のフルパスを取得
        $post->image_path = Storage::disk('s3')->url($path);
        $post->user_id = \Auth::id();
        $post->content = $request->content;
        

        $post->save();

        return redirect('/');
        
        
    }
    
    public function destroy($post_id)
    {
        $post = Post::find($post_id);
        $post->delete();
        return redirect('/');
    }
    
}
