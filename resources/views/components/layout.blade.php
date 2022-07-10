<!DOCTYPE html>
<html>
	<head>
		<title>{{ isset($title) ? $title : 'some title'}}</title>
	</head>
	<body>
		{{ $slot }}
	</body>
</html>
