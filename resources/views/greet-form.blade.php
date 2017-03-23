<!DOCTYPE html>
<html>
<head>
	<title>Greet Form</title>
</head>
<body>

<h2>
	{{ $head }}
</h2>

<form method="POST" action="/greet">

{{ csrf_field() }}

	Name: <input type="text" name="name">
	<button type="submit">Greet!</button>
</form>

</body>
</html>