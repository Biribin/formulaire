@extends('base')

@section('title','Dashboard')

@section('content')

<h1>Dashboard</h1>
<h2>{{ count($formulaires) }} formulaire</h2>

@foreach ($formulaires as $formulaire)
    <p>{{ $formulaire->email }}</p>
    <p>{{ $formulaire->zip }}</p>


@endforeach
@endsection
