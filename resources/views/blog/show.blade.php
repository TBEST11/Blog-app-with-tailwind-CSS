@extends('layouts.app')
@section('content')

<div class="w-4/5 m-auto text-left">
    <div class="py-5 ">
        <h1 class=" text-4xl">
       {{$post->title}}
        </h1>
    </div>
    
      
    <div class="w-4/5 m-auto pt-20">
        <span class=" text-gray-500">
            By <span class="font-blod italic text-gray-800">{{$post->user->name}}</span>, Created On {{date('js M Y', strtotime($post->updated_at))}}
       </span>
       <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {{$post->description}}

       </p>

    </div>
@endsection
