@extends('layouts.app')

@section('title', $category->name . ' category')

@section('header', $category->name)

@section('content')
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
@endsection
