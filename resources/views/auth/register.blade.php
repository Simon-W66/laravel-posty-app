@extends('layouts.app')

@section('content')
        <div class="flex justify-center">
            <div class="w-4/12 bg-white p-5 m-5 rounded-lg">
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <h2 class="text-center">Register form</h2> 
                    <div class="mb-4">
                        <label for="name" class="sr-only">Name</label>
                        <input type="text" name="name" id="name" placeholder="Your name" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value="{{old('name')}}">
                        @error('name')
                            <div class="text-red-500 mt-2 text-sm">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
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
                        <label for="password_confirmation" class="sr-only">Password again</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat your password" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password_confirmation') border-red-500 @enderror" >
                        @error('password_confirmation')
                            <div class="text-red-500 mt-2 text-sm">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <button class="bg-blue-500 text-white px-4 py-3 my-2 rounded font-medium w-full">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
@endsection