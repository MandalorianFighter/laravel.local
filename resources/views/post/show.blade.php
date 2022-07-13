<x-layout>

<title>Post - {{ $post->title }}</title>


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
                        <div>
                              {{ $post->thumbnail }};
                        </div>
<h3>Related categories</h3>
@foreach ($post->categories as $category) 
<div>
<a href="/categories/{{$category->id}}">{{ $category->name }}</a>;
</div>
@endforeach
@foreach ($comments as $comment)

<p><div>User name: {{ $comment->user->name }}</div>
<div>{{$comment->text}}</div></p>
@endforeach
</x-layout>
