@extends('layouts.app')

@section('title', $user->name)

@section('header', $user->name)

@section('content')
<div>
<div>User email is {{ $user->email }};</div>
<div>User is created at {{ $user->created_at }}.</div>
</div>
@endsection
