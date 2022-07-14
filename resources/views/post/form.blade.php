<form action="" method="POST">
@csrf
	<input name="title" placeholder="title">
	<input name="slug" placeholder="slug">
	<input type="submit">
</form>

@if (isset($data))
@foreach ($data as $key=>$item)
<p>{{ $key }} => {{ $item }}</p>
@endforeach
@endif
