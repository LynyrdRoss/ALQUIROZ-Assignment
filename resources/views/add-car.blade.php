<!DOCTYPE html>
<html>
<head>
	<title>Add New Car</title>
</head>
<body>

<h2>{{ $title }}</h2>

<form method="POST" action="/add-car">
	
	{{ csrf_field() }}

	<div>
		<label>Name:</label>
		<div>
			<input type="text" name="name">
		</div>
	</div>
	<div>
		<label>Color:</label>
		<div>
			<select name="color">
				<option value="black">Black</option>
				<option value="white">White</option>
				<option value="red">Red</option>
				<option value="multi-colored">Multi-colored</option>
			</select>
		</div>
	</div>
	<div>
		<label>Manufacturer:</label>
		<div>
			<input type="text" name="manufacturer">
		</div>
	</div>
	<div>
		<label>Year Manufactured:</label>
		<div>
			<input type="number" name="year_manufacture">
		</div>
	</div>
	<br />
	<div>
		<button type="submit">Add Car</button>
	</div>

</form>

</body>
</html>