@extends('layouts.app')

@section('title', 'Categories')

@section('header', 'Categories')

@section('content')

@foreach ($categories as $category)
                <div>
                        <h2><a href="{{ route('categories.show', $category->id) }}">{{ $category->name }}</a></h2>
@foreach ($category->posts as $post)
                <div>
                        <h3><a href="/post/{{ $post->id }}">{{ $post->title }}</a></h3>

                        <div>
                             Post slug is "{{ $post->slug }}".
                        </div>
                        <div>
                              Post is created at {{ $post->created_at }}.
                        </div>
                </div>
        @endforeach

                </div>
@endforeach
@endsection
