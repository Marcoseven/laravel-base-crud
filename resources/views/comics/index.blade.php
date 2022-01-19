@extends('layout.app')
@section('pag-title', 'HomePage')
@section('content')

<div class="container">
    <h2 class="text-center">
        index Page   
    </h2>
    <div>
        @foreach($comics as $comic)
         <div class="col">
             <div class="card">
                <img src="{{ $comic['thumb'] }}" alt="immagine copertina fumetto della DC Comics">
                <div class="text-uppercase">{{ $comic['series'] }}</div>
             </div>
         </div>
         <hr>
         @empty
        <p>Mi dispiace, nulla da mostrare</p>
         @endforeach 
    </div>
</div>
@endsection




