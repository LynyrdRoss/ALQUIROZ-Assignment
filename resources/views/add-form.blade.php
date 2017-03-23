<!DOCTYPE html>
<html>
<head>
	<title>Addition Form</title>
</head>
<body>

<h1>{{ $title }}</h1>

<form method="POST" action="{{ route('addNum') }}">

	{{ csrf_field() }}

	<input type="number" name="x">
	 + 
	<input type="numer" name="y">
	<button type="sumbit">ADD</button>
</form>

</body>
</html>