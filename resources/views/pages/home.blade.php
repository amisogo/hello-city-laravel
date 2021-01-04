@extends('base')

@section('title')



@section('content')

        <img src="{{ asset('images/fo4.png') }}" alt="image de l'accueil" class=" mt-12 rounded shadow-md h-32">
        <h1 class=" mt-5 mb-5 text-3xl sm:text-5xl font-semibold text-indigo-600">Hello from Mali!</h1>

        <p class="text-lg text-gray-800"> It's currently {{ date('h:i A')}}.</p>



@endsection
