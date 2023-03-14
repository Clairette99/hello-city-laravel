@extends('layouts/app',['title'=>'About Us'])

@section('content')
   
<img src="{{asset('img/icone.jpeg')}}" alt="icon" class="my-12 rounded-full shadow-md">

        
        <h2 class="mb-5 text-gray-700">
                built with <span class="text-pink-500"> &hearts;<span> by les teachears du Net.
        </h2>
        
        <a href="{{route('home')}}" class="text-indigo-500 hover:text-indigo-600 underline">
                revenir a la page d accueil
        </a>

@endsection

