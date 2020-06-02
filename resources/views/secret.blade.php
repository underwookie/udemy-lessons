@extends('layout')

    @section('content')
    <h1>Secret Page!</h1>
    <p>This is a secret email secret@laravel.lessons</p>

    @can('home.secret')
        <p>Special contact details</p>
    @endcan
    @endsection('content')
