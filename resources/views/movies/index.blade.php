@extends('layouts.app')
@section('content')

<h1>Movies Page</h1>
<div class="container">
    @foreach ($movies as $movie)
    <div class="">
        <img src="{{ $movie->thumb }}" alt="{{ $$movie->title }}">
        <a href="{{ route('movie', $movie->id) }}">{{ $movie->title }}</a>
    </div>
    @endforeach
</div>
@endsection