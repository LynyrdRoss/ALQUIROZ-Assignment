<!DOCTYPE html>
<html>
<head>
	<title>LVCC Members</title>
</head>
<body>

<h1>{{ $title }}</h1>

<a href="/add-member"><button type="submit">NEW MEMBER</button></a>
<p></p>

<table style="width:50%" border="3">
	<tr>
		<th>ID</th>
		<th>Full Name</th>
		<th>E-Mail</th>
		<th>Age</th>
	</tr>
	@foreach ($members as $member)
	<tr>
		<td>{{ $member->id }}</td>
		<td>{{ $member->getFullName() }}</td>
		<td>{{ $member->email }}</td>
		<td>{{ $member->age }}</td>
	</tr>
	@endforeach
</table>

</body>
</html>