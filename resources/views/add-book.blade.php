<!DOCTYPE html>
<html>
<head>
	<title>Add New Book</title>
</head>
<body>

<h2>{{ $title }}</h2>

<form method="POST" action="/add-book">
	
	{{ csrf_field() }}

	<div>
		<label>Title:</label>
		<div>
			<input type="text" name="title">
		</div>
	</div>
	<div>
		<label>Year Published:</label>
		<div>
			<input type="number" name="year_publish">
		</div>
	</div>
	<br />
	<div>
		<button type="submit">Add Book</button>
	</div>

</form>

</body>
</html>