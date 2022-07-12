<x-layout>

<title>Thumbnails</title>

        @foreach ($thumbnails as $thumbnail)
                <div>
                        <h2>{{ $thumbnail->alt }}</h2>
                        
                        <div>
                              {{ $thumbnail->post }};
                        </div>
                </div>
        @endforeach
</x-layout>
