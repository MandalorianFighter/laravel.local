<x-layout>

<title>Posts</title>

	@foreach ($posts as $post)
		<div>
			<h2>{{ $post->title }}</h2>
			<div>
				{{ $post->post_slug }}
			</div>
		</div>
	@endforeach
</x-layout>
