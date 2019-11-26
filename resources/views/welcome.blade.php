@extends('layout')

@section('content')
    <h1>Welcome  {{ $swargam }} Page</h1>

    <ul>
    @foreach($tasks as $task)
        <li>{{ $task }}</li>
    @endforeach
    </ul>
@endsection

@section('title')
    Welcome Page
@endsection

