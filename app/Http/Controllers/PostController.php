<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        $posts = Post::latest()->with(['user', 'likes'])->paginate(3); //colletion
        
        return view("posts", [
            'posts' => $posts,
        ]);
    }
    public function store(Request $request){

        $this->validate($request, [
            'title' => 'required|max:200',
            'body' => 'required',
        ]);
        
        
        $request->user()->posts()->create([
            'body'=> $request->body,
            'title'=> $request->title
        ]);

        return back();
        //return redirect()->route('home');
    }
    public function destroy(Post $post){
        
        $this-> authorize('delete', $post);
        $post->delete();
        
        return back();
    }
    
    public function show(Post $post){
        return view('user.posts.show',[
            'post'=>$post,
        ]);
    }
}
