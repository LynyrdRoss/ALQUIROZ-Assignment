<!DOCTYPE html>
<html>
<head>
	<title>Orders</title>
</head>
<body>

{{ $title }}

<table style="width:50%" border="3">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Item</th>
		<th>Price</th>
	</tr>
	@foreach ($query as $order)
	<tr>
		<td>{{ $order->id }}</td>
		<td>{{ $order->name }}</td>
		<td>{{ $order->email }}</td>
		<td>{{ $order->phone }}</td>
		<td>{{ $order->item }}</td>
		<td>{{ $order->price }}</td>
	</tr>
	@endforeach
</table>

</body>
</html>