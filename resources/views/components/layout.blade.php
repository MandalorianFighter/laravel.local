<!DOCTYPE html>
<html>
	<head>
		<title>{{ $title }}</title>
	</head>
	<body>
		<div class="wrapper">
<x-header />
<x-alert type="error" :message="$message" class="alert" />
<x-nav />
			<main>
				{{ $slot }}
			</main>
<x-footer />
<x-footer.info />
		</div>
	</body>
</html>
