<x-layout>
	@foreach ($users as $user)
		<div>
			<h2>{{ $user->name }}</h2>
			<div>
				{{ $user->email }}
			</div>
		</div>
	@endforeach
</x-layout>
