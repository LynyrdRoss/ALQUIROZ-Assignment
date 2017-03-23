<!DOCTYPE html>
<html>
<head>
	<title>Cars</title>
</head>
<body>

{{ $title }}

<h3>
	<a href="/add-car">New Car</a>
	| <a href="/cars/black">Black</a>
	| <a href="/cars/white">White</a>
	| <a href="/cars/red">Red</a>
	| <a href="/cars/multi-colored">Multi-Colored</a>
</h3>

<table style="width:50%" border="3">
	<tr>
		<th style="width:15%">ID</th>
		<th style="width:25%">Name</th>
		<th style="width:15%">Color</th>
		<th style="width:25%">Manufacturer</th>
		<th style="width:20%">Year Manufactured</th>
	</tr>
	@foreach ($cars as $car)
	<tr>
		<td>{{ $car->id }}</td>
		<td>{{ $car->name }}</td>
		<td>{{ $car->color }}</td>
		<td>{{ $car->manufacturer }}</td>
		<td>{{ $car->year_manufacture }}</td>
	</tr>
	@endforeach
</table>

</body>
</html>