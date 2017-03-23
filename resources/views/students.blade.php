<!DOCTYPE html>
<html>
<head>
	<title>Students</title>
</head>
<body>

{{ $title }}

<table style="width:50%" border="3">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Program</th>
		<th>Age</th>
	</tr>
	@foreach ($students as $student)
	<tr>
		<td>{{ $student->id }}</td>
		<td>{{ $student->first_name }} {{ $student->last_name }}</td>
		<td>{{ $student->program }}</td>
		<td>{{ $student->age }}</td>
	</tr>
	@endforeach
</table>

</body>
</html>