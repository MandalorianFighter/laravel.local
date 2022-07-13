<x-layout>

<title>Post - {{ $post->title }}</title>



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
                        <div>
                              {{ $post->category }};
                        </div>

@foreach ($comments as $comment)

<p><div>User id is {{ $comment->user_id }}</div>
<div>{{$comment->text}}</div></p>
@endforeach
</x-layout>
