<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentModel extends Model {
    use HasFactory;
    protected $table = "student_models";
    protected $fillable = ['fname', 'lname', 'address', 'phNo'];
}