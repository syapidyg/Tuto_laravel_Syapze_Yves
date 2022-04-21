@extends('master')

@section('meta')
        <meta charset="UTF-8">
        <meta name="description" content="Tutoriel laravel 9">
        <meta name="keywords" content="HTML, CSS, Javascript">
        <meta name="author" content="John Doe">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
@endsection

@section('content')
        <p>Bonjour {{ $name }}</p>
@endsection