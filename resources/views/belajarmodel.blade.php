<html>
	<head>
		<title>Belajar Model</title>
	</head>

	<body>
		<select>
			@if(count($data))
				@foreach($data as $user)
					<option>{{ $user->nama }}</option>
				@endforeach
			@endif
		</select> 
	</body>
</html>