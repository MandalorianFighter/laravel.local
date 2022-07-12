<x-layout>

<title>Posts</title>

	@foreach ($posts as $post)
		<div>
			<h2>{{ $post->title }}</h2>
			<div>
				Post slug is {{ $post->slug }};
			</div>
                        <div>
                               Post is created at {{ $post->created_at }};
                        </div>
                        <div>
                               User id is {{ $post->user_id }};
                        </div>
		</div>
	@endforeach
</x-layout>
