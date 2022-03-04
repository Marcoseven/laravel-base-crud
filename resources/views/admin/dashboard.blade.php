@extends('layouts.admin')
@section('content')

<h1 class="text-center">Welcome to the Dashboard</h1>
<aside>
<nav class="nav flex-column"></nav>
  <a class="nav-link active" aria-current="page" href="{{ route('admin.posts.index') }}">Posts</a>
  <a class="nav-link" href="{{ route('admin.posts.index') }}">Movies</a>
  <a class="nav-link" href="{{ route('admin.posts.index') }}">Comics</a>
  <a class="nav-link disabled">Videos</a>
</nav>
</aside>

@endsection