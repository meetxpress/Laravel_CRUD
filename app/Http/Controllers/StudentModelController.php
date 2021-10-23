<?php

namespace App\Http\Controllers;

use App\Models\StudentModel;
use Illuminate\Http\Request;

class StudentModelController extends Controller {
    public function store(Request $req) {
        $student = new StudentModel();
        $student->fname = $req->input('fname');
        $student->lname = $req->input('lname');
        $student->address = $req->input('addr');
        $student->phno = $req->input('mno');
        $student->save();
        return redirect()->back()->with('status', 'Student Added Successfully');
    }
}