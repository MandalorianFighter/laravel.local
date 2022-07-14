<form action="" method="POST">
@csrf
	<input name="title" placeholder="title">
	<input name="slug" placeholder="slug">
        <p><textarea name="text" rows="4" cols="50"></textarea><p>
	<p><input type="submit"></p>
</form>

@if (isset($data))
@foreach ($data as $key=>$item)
<p>{{ $key }} => {{ $item }}</p>
@endforeach
@endif
