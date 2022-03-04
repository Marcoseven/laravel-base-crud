@extends('layouts.app')
@section('content')

<h1>Movie Page</h1>
<div class="container">
    <div class="">
        <img src="{{ $movie->thumb }}" alt="{{ $$movie->title }}">
        <a href="{{ route('movie', $movie->id) }}">{{ $movie->title }}</a>
    </div>
    <div>
        <p>{{ $movie->description }}</p>
    </div>
</div>
@endsection