<!DOCTYPE html>
<html>
	<head>
		<title>{{ $title }}</title>
	</head>
	<body>
		<div class="wrapper">
<x-header />
<x-alert>
<x-slot:type>
	error
</x-slot>
	text alert text
</x-alert>
<x-nav />
			<main>
				{{ $slot }}
			</main>
<x-footer />
<x-footer.info />
		</div>
	</body>
</html>
