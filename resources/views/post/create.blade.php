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

@section('title', 'Post Creating')

@section('header', 'Post Creating')

@section('content')

{{ Form::model($post, ['url' => route('posts.store')]) }}
    {{ Form::label('title', 'Title') }}
    {{ Form::text('title') }}<br>
    {{ Form::label('slug', 'Slug') }}
    {{ Form::text('slug') }}<br>
    {{ Form::submit('Create') }}
{{ Form::close() }}

@endsection
