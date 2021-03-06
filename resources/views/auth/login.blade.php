@extends('layouts.app')

@section('content')
        <div class="flex justify-center">
            <div class="w-4/12 bg-white p-5 m-5 rounded-lg">
                @if(session('status'))
                    <div class="text-red-500 bg-red-200 p-4 mt-2 text-sm rounded">
                        {{session('status')}}
                    </div>
                @endif
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <h2 class="text-center">Login form</h2> 
                    <div class="mb-4">
                        <label for="email" class="sr-only">Email</label>
                        <input type="email" name="email" id="email" placeholder="Your email" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" value="{{old('email')}}">
                        @error('email')
                            <div class="text-red-500 mt-2 text-sm">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="password" class="sr-only">Password</label>
                        <input type="password" name="password" id="password" placeholder="Your password" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror" >
                        @error('password')
                            <div class="text-red-500 mt-2 text-sm">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <div class="flex items-center">
                            <input type="checkbox" name="remember" id="remember" class="mr-2">
                            <label for="remember">Remember me</label>
                        </div>
                    </div>
                    <div>
                        <button class="bg-blue-500 text-white px-4 py-3 my-2 rounded font-medium w-full">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
@endsection