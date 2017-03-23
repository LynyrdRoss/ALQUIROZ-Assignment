<!DOCTYPE html>
<html>
<head>
	<title>Edit Book Details</title>
</head>
<body>

<h2>Edit {{ $book->title }} Book Details</h2>

<form method="POST" action="/save-book">
	
	{{ csrf_field() }}

	<input type="hidden" name="id" value="{{ $book->id }}">

	<div>
		<label>Title:</label>
		<div>
			<input type="text" name="title" value="{{ $book->title }}">
		</div>
	</div>
	<div>
		<label>Year Published:</label>
		<div>
			<input type="number" name="year_publish" value="{{ $book->year_publish }}">
		</div>
	</div>
	<br />
	<div>
		<button type="submit">Save Book</button>
	</div>

</form>

</body>
</html>