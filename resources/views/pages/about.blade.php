@extends('base')

@section('title', 'About Us | ' . config('app.name'))


@section('content')

            <img src="{{ asset ('images/logo.png') }}" alt="logo ">

        <p> Built with &hearts; by AMINATA Sogodogo</p>

        <p> <a href="{{ route('home') }}">Revenir à la page d'accueil</a> </p>


@endsection
