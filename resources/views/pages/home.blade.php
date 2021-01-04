@extends('base')

@section('title')



@section('content')

        <img src="{{ asset('images/fo4.png') }}" alt="image de l'accueil">
        <h1>Hello from Mali!</h1>

        <p> It's currently {{ date('h:i A')}}.</p>



@endsection
