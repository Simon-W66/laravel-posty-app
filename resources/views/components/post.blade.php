@props(['post'=> $post])

<div>
    <div class="bg-orange-100 m-3 p-3 rounded-lg ">
        <div class="mb-4">
            <b>Creator:</b><a href="{{ route('users.posts', $post->user)}}" class="fond-bold text-lg px-1">{{$post->user->name}}</a><span class="text-gray-600 text-sm">{{$post -> created_at->diffForHumans()}}</span>
            <h1 class="text-lg font-medium">{{$post->title}}</h1>
            <p class="mb-2">{{$post->body}}</p>
        </div>
        <div class="flex justify-between">
            
            <div class="flex items-center">
                @auth
                @if(!$post->likedBy(auth()->user()))
                    <form action="{{ route('posts.likes' , $post->id) }}" method="post" class="mr-1">
                        @csrf
                        <button type="submit" class="text-white bg-blue-400 rounded-lg px-2.5 py-0.5">Like</button>
                    </form>
                @else
                <form action="{{route('posts.likes', $post)}}" method="post" class="mr-1">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-white bg-red-400 rounded-lg px-2.5 py-0.5">Unlike</button>
                </form>
                @endif
                @endauth
                <span>{{$post->likes->count()}} likes</span>
            </div>
            @can('delete', $post)
                <form action="{{ route('posts.destroy', $post) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-white bg-red-600 rounded-lg px-2.5 py-0.5">DELETE</button>
                </form> 
            @endcan
                
            
        </div>
        
    </div>
</div>