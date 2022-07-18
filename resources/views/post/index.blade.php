@extends('layouts.app')

@section('title', 'Posts list')

@section('header', 'Posts list')

@section('content')
    @foreach ($posts as $post)
        <h2><a href="{{ route('posts.show', $post->id) }}">{{$post->title}}</a></h2>
        <div>{{ $post->slug }}</div>
        <div>{{ $post->created_at }}</div>
<a href="{{ route('posts.edit', $post->id) }}">Edit post</a>
<a href="{{ route('posts.destroy', $post->id) }}" data-confirm="Are you sure?" data-method="delete" rel="nofollow">Delete</a>
    @endforeach
{{ $posts->links() }}
<style>
svg {width: 1em; height: 1em;}
</style>
@endsection
