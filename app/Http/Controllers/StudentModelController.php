<?php

namespace App\Http\Controllers;

use App\Models\StudentModel;
use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;

class StudentModelController extends Controller {
    public function index() {
        $student = StudentModel::all();
        return view('welcome', compact('student'));
    }

    public function store(Request $req) {
        $student = new StudentModel();
        $student->fname = $req->input('fname');
        $student->lname = $req->input('lname');
        $student->address = $req->input('addr');
        $student->phno = $req->input('mno');
        $student->save();
        return redirect()->back()->with('status', 'Student Added Successfully');
    }
    
    public function update(Request $req, StudentModel $student) {
        $student->update($req->all());
        return redirect()->back()->with('status', 'Student details has been updated Successfully!');
    }

    public function destroy(StudentModel $student) {
        $student->delete();
        return redirect()->back()->with('status', 'Student details has been deleted Successfully!');
    }
}