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
        $messages=message::paginate(5);
        return view('admin.student_message',compact('messages'));
    }


    public function student_enroll()
    {
        $students=student::paginate(5);
        return view('admin.student_enrollment',compact('students'));
    }

    public function delete_student($id)
    {
        $students=student::find($id);
        $students->delete();
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
