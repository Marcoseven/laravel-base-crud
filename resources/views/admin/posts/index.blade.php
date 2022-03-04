@extends('layouts.admin')
@section('content')

<div class="heading d-flex justify-content-between container">
    <h1>Tutti i posts in una tabella</h1>
    <a class="btn btn-primary" href="{{route('admin.posts.create')}}" role="button">Create</a>
</div>

@include('partials.session_message')

<div class="container">

    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Titolo</th>
                <th>Creato</th>
                <th>Caricato</th>
                <th>Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <td scope="row">{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->created_at}}</td>
                <td>{{$post->updated_at}}</td>
                <td> 
                    <a href="{{ route('admin.posts.show', $post->id) }}">View</i></a> -  
                    <a href="{{ route('admin.posts.edit', $post->id) }}">Edit</i></a> 
                </td>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#delete{{ $posts->id }}">
                  Delete
                </button>
                
                <!-- Modal -->
                <div class="modal fade" id="delete{{ $posts->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-{{ $post->id }}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Delete Post {{ $post->title }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>
                                    Attenzione questa operazione non puo essere annullata!
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <form action="{{ route('admin.post.destroy', $post->id) }}" method="post">Delite
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </tr>
            @endforeach

        </tbody>
    </table>

    {{$posts->links()}}
    <form action="{{ route('admin.post.destroy', $post->id) }}">
        <i class="fas fa-pen"></i> 
    </form>
</div>

@endsection
