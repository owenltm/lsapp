@extends('layouts.app')

@section("content")

<div class="jumbotron text-center">
    <h1>{{$title}}</h1>
    <p>This is the laravel application</p>
    <a class="btn btn-primary" href="/login" role="button">Login</a>
    <a class="btn btn-success" href="/register" role="button">Register</a>
</div>


@endsection