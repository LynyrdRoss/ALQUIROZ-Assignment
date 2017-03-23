<!DOCTYPE html>
<html>
<head>
	<title>Add New Pet</title>
</head>
<body>

<h2>{{ $title }}</h2>

<form method="POST" action="/add-pet">
	
	{{ csrf_field() }}

	<div>
		<label>Name:</label>
		<div>
			<input type="text" name="name">
		</div>
	</div>
	<div>
		<label>Pet Type:</label>
		<div>
			<select name="type">
				<option value="dog">Dog</option>
				<option value="cat">Cat</option>
				<option value="bird">Bird</option>
			</select>
		</div>
	</div>
	<br />
	<div>
		<button type="submit">Add Pet</button>
	</div>

</form>

</body>
</html>