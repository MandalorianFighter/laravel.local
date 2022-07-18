<header>
<x-logo />
<x-contact />

    <a href="{{ route('main') }}">Home</a>
    <a href="{{ route('posts.index') }}">Posts</a>
    <a href="{{ route('users.index') }}">Users</a>
<p>{{ $var1 }}</p>
<p>{{ $var2 }}</p>
</header>
