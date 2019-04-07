@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if (count($posts)>1)
        @foreach ($posts as $post)
            <div class="card card-body bg-light">
            <h3>{{$post->title}}</h3>
            <small>Created on {{$post->created_at}}</small>
            </div>
        @endforeach
    @else
        <p>No posts found</p>
    @endif
@endsection