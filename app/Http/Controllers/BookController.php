<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function showBooks(Request $request)
    {
    	$books = Book::all();

    	return view('books', compact('books'), [
    	'title' => 'Favorite Books'
    	]);
    }

    public function showForm(Request $request)
    {
    	return view('add-book', [
    		'title' => 'Add New Book Form'
    	]);
    }

    public function addBook(Request $request)
    {
    	$book = new Book;
    	$book->title = $request->title;
    	$book->year_publish = $request->year_publish;
    	$book->save();

    	return redirect('/books');
    }

    public function editBookForm(Request $request, $book_id)
    {
        $book = Book::find($book_id);

        return view('edit-book', compact('book'));
    }

    public function saveBook(Request $request)
    {
        $book_id = $request->id;
        $title = $request->title;
        $year_publish = $request->year_publish;

        $book = Book::find($book_id);
        $book->title = $title;
        $book->year_publish = $year_publish;
        $book->save();

        return redirect('/books');
    }

    public function deleteBook(Request $request, $book_id)
    {
        $book = Book::find($book_id);
        $book->delete();

        //UPDATE books SET deleted_at = NULL;

        return redirect('/books');
    }
}
