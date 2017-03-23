<!DOCTYPE html>
<html>
<head>
	<title>Add New LVCC Member</title>
</head>
<body>

<h2>{{ $title }}</h2>

<form method="POST" action="/add-member">
	
	{{ csrf_field() }}

	<div>
		<label>First Name:</label>
		<div>
			<input type="text" name="first_name">
		</div>
	</div>
	<div>
		<label>Last Name:</label>
		<div>
			<input type="text" name="last_name">
		</div>
	</div>
	<div>
		<label>Email:</label>
		<div>
			<input type="email" name="email">
		</div>
	</div>
	<div>
		<label>Age</label>
		<div>
			<input type="number" name="age">
		</div>
	</div>
	<div>
		<button type="submit">Add Member</button>
	</div>

</form>

</body>
</html>