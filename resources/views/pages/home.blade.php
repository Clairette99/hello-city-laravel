@extends('layouts/app')


@section('title', config('app.name') )

<img src="{{ asset('img/drapeau.jpeg') }}" alt="drapeau quebec">

@section('content')

        <h1 class="m-5 text-3xl sm:text-5xl font-semibold text-indigo-600">
                Hello from Quebec!
        </h1>
        <p class="text-lg text-gray-800"> it's currently {{ date('h:i A') }}. </p>
    
@endsection
    


