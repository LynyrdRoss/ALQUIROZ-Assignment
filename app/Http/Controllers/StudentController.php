<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;


class StudentController extends Controller
{
	public function showStudents(Request $request)
	{
		/*
		use DB;
		$students = DB::table('students')
					->select('*')
					->orderby('age', 'DESC')
					->limit(15)
					->get();
		*/

		$students = Student::
					select('*')
					->orderby('id')
					->limit(12)
					->get();

		return view('students', compact('students'), [
			'title' => 'Current number of LVCC students: ' . $students->count()
		]);
	}
}