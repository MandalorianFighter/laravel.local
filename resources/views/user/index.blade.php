@extends('layouts.app')

@section('title', 'User List')

@section('header', 'User List')

@section('content')

@foreach ($users as $user)
<div>
<h2><a href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a></h2>
<div>User email is {{ $user->email }};</div>
<div>User is created at {{ $user->created_at }}.</div>
</div>
@endforeach

@endsection
