@extends('app')

@section('title','About Us |' .  config('app.name'))
    
@section('content')
        
        <p>built &hearts; by les teachears du Net.</p>
        <a href="{{route('home')}}">revenir a la page d accueil</a>

@endsection

