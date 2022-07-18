<!DOCTYPE html>
<html>
	<head>
		<title>{{ $title }}</title>
	</head>
	<body>
		<div class="wrapper">
<x-header />
<x-alert>
	text alert text
</x-alert>
			<main>
				{{ $slot }}
			</main>
<x-footer />
<x-footer.info />
		</div>
	</body>
</html>
