<form action="" method="POST">
@csrf
	<input name="text[title]" placeholder="title">
	<input name="text[slug]" placeholder="slug">
        <p><textarea name="text[text]" rows="4" cols="50"></textarea><p>
	<p><input type="submit"></p>
</form>

@if (isset($title) and isset($slug) and isset($text))
<p>Title - {{ $title }}</p>
<p>Slug - {{ $slug }}</p>
<p>Text: {{ $text }}</p>
@endif
