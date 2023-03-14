@extends('app')


@section('title', config('app.name') )

<img src="{{ asset('img/drapeau.jpeg') }}" alt="drapeau quebec">

@section('content')

        <h1>Hello from Quebec!</h1>
        <p> it's currently {{ date('h:i A') }}. </p>
    
@endsection
    


