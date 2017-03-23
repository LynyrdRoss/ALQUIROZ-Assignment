<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
 * Order route
*/

Route::get('/orders', 'OrderController@showOrders');

Route::get('/orders/{user_id}', 'OrderController@showOrderByUserId');

/*
 * Eof Order route
*/

/*
 * Student route
*/

Route::get('/students', 'StudentController@showStudents');

/*
 * Eof Student route
*/

/*
 * Member route
*/

Route::get('/members', 'MemberController@showMembers');

Route::get('/add-member', 'MemberController@addMemberForm');

Route::post('/add-member', 'MemberController@addMember');

/*
 * Eof Member route
*/

/*
* Pet route
*/

Route::get('/pets', 'PetController@showPets');

Route::get('/add-pet', 'PetController@showForm');

Route::get('/pets/{type}', 'PetController@showByType');

Route::post('/add-pet', 'PetController@addPet');

/*
* Eof Pet route
*/

/*
* Book route
*/

Route::get('/books', 'BookController@showBooks');

Route::get('/books/edit/{book_id}', 'BookController@editBookForm');

Route::get('/books/delete/{book_id}', 'BookController@deleteBook');

Route::get('/add-book', 'BookController@showForm');

Route::post('/add-book', 'BookController@addBook');

Route::post('/save-book', 'BookController@saveBook');

/*
* Eof Book route
*/

/*
* Car route
*/

Route::get('/cars', 'CarController@showCars');

Route::get('/add-car', 'CarController@showForm');

Route::get('/cars/{color}', 'CarController@showByColor');

Route::post('/add-car', 'CarController@addCar');

/*
* Eof Car route
*/

/*
* Greet route
*/

Route::get('/mention/{name}', 'greetController@mentionName');

Route::get('/greet/form', 'greetController@showForm');

Route::post('/greet', 'greetController@greet');

/*
* Eof Greet route
*/

/*
* Addition route
*/

Route::get('/add/form', 'AddController@showForm');

Route::post('/add', 'AddController@addNumber')->name('addNum');

/*
* Eof Addition route
*/