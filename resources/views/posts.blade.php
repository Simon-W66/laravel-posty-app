@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-orange-200 p-6 rounded-lg my-5">
            <div class="flex justify-center">
                <h1 class='text-lg font-semibold text-stone-50'>POSTS</h1>
                
            </div>
            <form action="{{route('posts')}}" method="post">
                @csrf
                    <label for="text" class="sr-only">Title</label>
                        <input type="text" name="title" id="title" placeholder="Your title" class="bg-gray-100 border-2 w-full p-4 my-4 rounded-lg @error('title') border-red-500 @enderror" value="{{old('title')}}">
                        @error('title')
                            <div class="text-red-500 mt-2 text-sm">
                                {{$message}}
                            </div>
                        @enderror
                    <textarea name="body" id="body" cols="30" rows="4" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('body') border-red-500 @enderror" placeholder="Post something!"></textarea>
                        @error('body')
                            <div class="text-red-500 mt-2 text-sm">
                                {{$message}}
                            </div>
                        @enderror
                    <div>
                        <button class="bg-green-400 text-white px-4 py-3 my-2 rounded font-medium w-full">Submit</button>
                    </div>
                    
            </form>
               <h1 class="text-center font-bold text-lg">All posts</h1>
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