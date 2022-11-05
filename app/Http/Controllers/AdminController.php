<?php

namespace App\Http\Controllers;

use App\Models\Student;

use App\Models\Message;

use Session;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function student_message()
    {
        $message=message::all();
        return view('admin.student_message',compact('message'));
    }


    public function student_list()
    {
        $student=student::all();
        return view('admin.student_list',compact('student'));
    }

    public function delete_student($id)
    {
        $student=student::find($id);
        $student->delete();
        return redirect()->back()->with('message','Student Deleted Successfully');
    }

    public function delete_message($id)
    {
        $message=message::find($id);
        $message->delete();
        return redirect()->back()->with('message','Message Deleted Successfully');
    }

    public function student_grade()
    {
        return view('admin.student_grade');
    }


}
