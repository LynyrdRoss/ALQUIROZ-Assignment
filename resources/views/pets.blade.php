<!DOCTYPE html>
<html>
<head>
	<title>Pets</title>
</head>
<body>

<h3>
	<a href="/add-pet">NEW PET</a>
	| <a href="/pets/dog">Dogs</a>
	| <a href="/pets/cat">Cats</a>
	| <a href="/pets/bird">Birds</a>
</h3>

<table style="width:50%" border="3">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Type</th>
	</tr>
	@foreach ($pets as $pet)
	<tr>
		<td>{{ $pet->id }}</td>
		<td>{{ $pet->name }}</td>
		<td>{{ $pet->type }}</td>
	</tr>
	@endforeach
</table>

</body>
</html>