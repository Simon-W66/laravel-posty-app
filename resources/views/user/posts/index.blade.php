@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-blue-100 p-6 rounded-lg my-5">
                <h1 class="text-center font-bold text-lg">All posts from {{$user->name}}</h1>
                <p>User <b>{{$user->name}}</b> has {{$posts->count()}} {{Str::plural('post', $posts->count())}} and received {{$user->receivedLikes->count()}} likes</p>
                @if($posts ->count())
                    @foreach ($posts as $post)
                         <x-post :post="$post"/>                   
                    @endforeach        
                @else
                    <p>There are no posts</p>
                @endif
            {{$posts->links()}} 
        </div>
    </div>
@endsection