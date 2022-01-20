@extends('layout.app')

@section('content')
<div class="container">
    <h2 class="text-center">
        Comic  
    </h2>
    <div>
        @foreach($comics as $comic)
         <div class="col">
             <div class="card">
                 <a href="{{ route('comic', $comic->id) }}"></a>
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                <div class="text-uppercase">{{ $comic->series }}</div>
             </div>
         </div>
         <hr>
         @empty
        <p>Mi dispiace, nulla da mostrare</p>
         @endforeach 
    </div>
</div>
@endsection




