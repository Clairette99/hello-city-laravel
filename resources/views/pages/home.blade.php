@extends('app')


@section('title', config('project.variable') )

@section('content')

        <h1>Hello from Quebec!</h1>
        <p> it's currently {{ date('h:i A') }}. </p>
    
@endsection
    


