<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function ViewAdminUser()
    {
        return view('useradmin');
    }

    public function ViewStudentUser()
    {
        return view('userstudent');
    }

    public function ViewTeacherUser()
    {
        return view('userteacher');
    }
}

