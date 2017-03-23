@extends('layouts.master')

@section('content')

	<h3>
		<a href="/add-book">New Book</a>
		| <a href="/books/Year">Year</a>
	</h3>

	<table border="3">
		<tr>
			<th>ID</th>
			<th>Title</th>
			<th>Year Published</th>
			<th></th>
		</tr>
		@foreach ($books as $book)
		<tr>
			<td>{{ $book->id }}</td>
			<td>{{ $book->title }}</td>
			<td>{{ $book->year_publish }}</td>
			<td>
				<a href="/books/edit/{{ $book->id }}"><button class="btn btn-primary">Edit</button></a>
				<a href="/books/delete/{{ $book->id }}"><button class="btn btn-danger">Delete</button></a>
			</td>
		</tr>
		@endforeach
	</table>

@endsection