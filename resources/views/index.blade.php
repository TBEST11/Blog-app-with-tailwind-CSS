@extends('layouts.app')


@section('content')



    <div  class="backgroud-image grid grid-cols-1 m-auto">
        <div class=" flex text-gray-100 pt-10">
            <div class=" pt-4 pb-16 sm:m-auto w-4/5 block text-center ">
              
                {{-- <img src="{{ asset('/uploads/blog1.jpg') }}" alt="image" style="height:600px"  /> --}}
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">

                <b> You want to become a developer? ?</b>   
                </h1>
                <a href="/blog" class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    <strong> Read More </strong>
                </a>

            </div>
        </div>
    </div>
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-1.5 border-b  border-gray-200">
        <div>
            <img src="{{ asset('/uploads/blog1.jpg') }}" width="700" alt="image">
        </div>
        <div class="m-auto sm:m-autotext-left w-4/5 block">
            <h2  class="text-4xl font-extrabold text-gray-600"> 
                Struggling to be a better web developer?

            </h2>
            <p class="py-8 text-gray-500 text-l">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti quas impedit, fugiat quos id sint aperiam natus sed voluptates obcaecati nihil perferendis
            </p>
            <p  class=" font-extrabold text-gray-600 text-xs pb-9"> 
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi hic, deleniti voluptate odit vel suscipit commodi sed animi quos quibusdam earum, nulla quasi exercitationem, aliquid asperiores? Possimus suscipit tempora asperiores?

            </p>
            <a href="/blog" class=" uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out more
            </a>
        </div>
    </div>
    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l">
            I'm an expert in .....
        </h2>
        <span class="font-extrabold block text-4xl py-1">
            Ux Design
        </span >
        <span class="font-extrabold block text-4xl py-1">
            Project Managenment
        </span >
        <span class="font-extrabold block text-4xl py-1">
            Digital Strategy
        </span >
        <span class="font-extrabold block text-4xl py-1">
            Blackend Development
        </span >

    </div>
    <div class="text-center py-15 ">
        <span  class="uppercase text-s text-gray-400">
            Blog
        </span>
        <h2 class="text-4xl front-bold py-10 ">
            Recent Posts
        </h2>
        <p class="m-auto w-4/5 text-gray-500">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam amet aliquid ipsum, maiores qui nemo fuga quas explicabo ad odio? Dolorem, debitis itaque? Sit nemo quia aliquid officiis veniam dolore?
        </p>
    </div>
    <div class="sm:grid-cols-2 w-4/5 m-auto">
       <div class="flex bg-yellow-700 text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
            <span class=" uppercase text-xs">
                PHP
            </span>
            
            <h3 class=" text-xl font-bold py-10">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea repellendus fugiat natus, similique, eaque, rerum culpa voluptatem optio provident vel laborum modi. Fugit labore amet placeat aspernatur reprehenderit dicta nam.
            </h3>
            <a href="" class=" uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-sm font-extrabold py-3 px-5 rounded-3xl">
                Find Out More
            </a>
        </div>
        <div>
            <img src="{{ asset('/uploads/blog1.jpg') }}" width="1000" alt="image">
        </div>
       </div>
    </div>
@endsection