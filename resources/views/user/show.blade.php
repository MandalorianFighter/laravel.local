<x-layout>
	@foreach ($users as $user)
		<div>
			<h2>{{ $user->name }}</h2>
			<div>
				User email is {{ $user->email }};
			</div>
                        <div>
                                User is created at {{ $user->created_at }}.
                        </div>
		</div>
	@endforeach
</x-layout>
