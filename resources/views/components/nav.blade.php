<nav>
	@foreach ($categories as $category)
		<a href="{{ route('categories.show', $category->id) }}">{{ $category['name'] }}</a>
	@endforeach
</nav>
