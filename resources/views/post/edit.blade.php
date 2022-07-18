@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@extends('layouts.app')

@section('title', 'Post Editing')

@section('header', 'Post Editing')

@section('content')

{{ Form::model($post, ['url' => route('posts.update', $post), 'method' => 'PATCH']) }}
{{ Form::label('title', 'Title') }}
{{ Form::text('title') }}<br>
{{ Form::label('slug', 'Slug') }}
{{ Form::text('slug') }}<br>
{{ Form::submit('Refresh') }}
{{ Form::close() }}

@endsection
