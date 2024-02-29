<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function ViewAdminSubject()
    {
        return view('adminsubject');
    }

    public function ViewStudentSubject()
    {
        return view('studentsubject');
    }

    public function ViewTeacherSubject()
    {
        return view('teachersubject');
    }
}


