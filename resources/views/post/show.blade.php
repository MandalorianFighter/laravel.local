<x-layout>
	<x-slot:title>
	{{ $title }} - site.com
	</x-slot>
<ul>	{{-- comment --}}
@foreach ($text as $elem)
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
@endforeach
</ul>
</x-layout>
