@extends('layouts.app')

@section('title', $post->title)

@section('header', $post->title )
@section('content')

<div>
	Post slug is {{ $post->slug }};
</div>
<div>
        Post is created at {{ $post->created_at }};
</div>
<div>
        User id is {{ $post->user_id }};
</div>
<div>
        {{ $post->thumbnail }};
</div>

<h3>Related categories</h3>
@foreach ($post->categories as $category) 
<div>
<a href="/categories/{{$category->id}}">{{ $category->name }}</a>;
</div>
@endforeach
@foreach ($post->comments as $comment)

<p><div>User name: {{ $comment->user->name }}</div>
<div>{{$comment->text}}</div></p>
@endforeach
@endsection
