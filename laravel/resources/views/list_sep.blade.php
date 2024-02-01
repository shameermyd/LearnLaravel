@extends('layout')

@section('content')
@include('partials._hero')
@include('partials._search')

    <h3>{{$lists['title']}}</h3>
    <p>{{$lists['description']}}</p>
@endsection