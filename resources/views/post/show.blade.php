<x-layout>
	<x-slot:title>
	{{ $title }} - site.com
	</x-slot>
<ul>	{{-- comment --}}
@foreach ($text as $key=>$elem)
       @if ($loop->first) 
       <li class="first">{{ $loop->index + 1 }}<br>
	{{ $elem }}</li><br>
       @elseif (($loop->last))
       <li class="last">{{ $loop->index + 1 }}<br>
        {{ $elem }}</li><br>
       @else
       <li>{{ $loop->index + 1 }}<br>
        {{ $elem }}</li><br>
       @endif
       @break($key === 2)
@endforeach
</ul>
</x-layout>
