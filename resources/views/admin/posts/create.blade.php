@extends('layouts.app')
@section('content')

<div class="container">
    <h1>Crea un nuovo post</h1>
    
    @include('partials.errors')
    <form action="{{route('admin.posts.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" name="title" id="title" class="form-control error('title') is-invalid @enderror" placeholder="Type your title here" aria-describedby="titleHelper" value="{{  old('title')}}"> 
            <small id="titleHelper" class="text-muted" >Digita un titolo per il tuo post, max: 200 caratteri</small>
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="body" class="form-label">Testo post</label>
            <textarea class="form-control error('body') is-invalid @enderror" name="body" id="body" rows="3" value="{{  old('body') }}"></textarea>
            @error('body')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Salva</button>

         @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </form>

    <div class="mb-3">
        <label for="" class="form-label"></label>
    </div>

    @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

@endsection
