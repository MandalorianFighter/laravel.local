<x-layout>

<title>Category {{ $category->name }}</title>

                <div>
                        <h2>{{ $category->name }}</h2>
                        
@foreach ($category->posts as $post)
                <div>
                        <h3>{{ $post->title }}</h3>
                        
                        <div>
                             Post slug is "{{ $post->slug }}".
                        </div>
                        <div>
                              Post is created at {{ $post->created_at }}.
                        </div>
                </div>
        @endforeach
                </div>
</x-layout>
