<form action="" method="POST">
@csrf
	<input name="title" placeholder="title">
	<input name="slug" placeholder="slug">
	<input type="submit">
</form>

@if (isset($title) and isset($slug))
<h2>{{ $title }}</h2>
<p>{{ $slug }}</p>
@endif
