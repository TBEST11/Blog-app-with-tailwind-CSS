@extends('layouts.app')
@section('content')

<div class="w-4/5 m-auto text-left">
    <div class="py-5 ">
        <h1 class=" text-4xl">
            Edit  post
        </h1>
    </div>
    @if($errors->any())
    <div class="w-4/5 m-auto">
        <ul>
            @foreach ($error->all() as $error)
            <li class="w-4/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
                {{$error}}
            </li>
            @endforeach
        </ul>

    </div>
    @endif
    <div class="w-4/5 m-auto pt-20">
        <form action="/blog/{{$post->slug}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method(PUT)
       
            <input type="text" name="title" value="{{$post->title}}" class="bg-transparent block border-b-2 w-full h-20 text-4xl outline-none">
        
            <textarea name="description"  class="py-20  bg-transparent block border-b-2 w-full h-60 text-xl outline-none">{{$post->description}}</textarea>
             
            <button  type="submit" class=" uppercase mt-15 bg-blue-500 text-gray-100  text-lg font-extrabold py-4  px-6  rounded-3xl">
                Post
            </button>
        </form>

    </div>
@endsection
