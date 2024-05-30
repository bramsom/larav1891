<?php

namespace App\Http\Controllers;

use App\Models\teacher;
use App\Models\Student;
use App\Models\subject;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    //

    public function consultasElokuent(){
        $student = student::find(1);
        return $student->subjects;
    }

}
