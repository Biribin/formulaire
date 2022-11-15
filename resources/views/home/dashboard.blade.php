@extends('base')

@section('title','Dashboard')

@section('content')


<h1>{{ count($formulaires) }} formulaires</h1>

@foreach ($formulaires as $formulaire)
        <h4>{{$formulaire->email }}</h4>
        <p>{{ $formulaire->comment }}</p>
<hr>
@endforeach
@endsection
