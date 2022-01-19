@extends('layout.app')
@section('page-title', 'comic-page')

@section('content')
<div class="comic">
    <div class="">
        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
    </div>
    <div class="">
        <h4>{{$comic->series}}</h4>
    </div>
</div>

@endsection