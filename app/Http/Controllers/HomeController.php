<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Message;
use Session;
use Stripe;
use App\Models\Student;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.userpage');
    }

    public function redirect()
    {
        $usertype=Auth::user()->usertype;
        if($usertype==1)
        {
            $total_student=student::all()->count();
            $total_message=message::all()->count();
            $total_all= $total_student + $total_message;
            return view('admin.home',compact('total_student','total_message','total_all' ));
        }
        else
        {
            return view('home.userpage');

        }
    }

    public function about()
    {
        return view('others.about');
    }

    public function classes()
    {
        return view('others.classes');
    }

    public function contact()
    {
        return view('others.contact');
    }

    public function add_student(Request $request)
    {
        $student= new student;

        $student->parent_name=$request->parent_name;

        $student->parent_email=$request->parent_email;

        $student->parent_phone=$request->parent_phone;

        $student->child_name=$request->child_name;

        $student->child_age=$request->child_age;

        $student->child_grade=$request->child_grade;

        $student->message=$request->message;

        $student->save();

        return redirect()->back()->with('message','You Enrolled Successsfully.');

    }

    public function parent_message(Request $request)
    {
        $message=new message;
        $message->name=$request->name;
        $message->email=$request->email;
        $message->grade=$request->grade;
        $message->phone_number=$request->phone_number;
        $message->message=$request->message;
        $message->save();

        return redirect()->back()->with('message','You sent message successfully');
    }

}
